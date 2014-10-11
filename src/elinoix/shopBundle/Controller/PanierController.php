<?php
/*
 * TODO 
 * 
 * -> remplacer session ID par $user
 *         
 * $user = $this->getUser();
 * 
 * if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
 * throw new AccessDeniedException();
 * }
 * 
 */

namespace elinoix\shopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use elinoix\shopBundle\Entity\Panier;
use elinoix\shopBundle\Entity\Commande;
use elinoix\shopBundle\Entity\LigneCommande;
use elinoix\shopBundle\Entity\Produit;
use elinoix\shopBundle\Entity\Client;

class PanierController extends Controller {

    public function contenuPanierAction() {
        $session = $this->getRequest()->getSession();
//      $session->clear();
        $panier = $session->get('panier', new Panier());
        $contenuPanier = $panier->getContenu();
        $rows = array();
        $total = 0;
        $total_qte = 0;

        if ($contenuPanier != null) {
            foreach ($contenuPanier as $idProduct => $qte) {
                $product = $this->getDoctrine()->getManager()->getRepository('elinoixshopBundle:Produit')->find($idProduct);
                $total_price = $product->getPrix() * $qte;
                $rows[$idProduct] = array('product' => $product,
                    'qte' => $qte,
                    'total_price' => $total_price);
                $total += $total_price;
                $total_qte += $qte;
            }
        }
        return $this->render('elinoixshopBundle:Panier:contenuPanier.html.twig', array('rows' => $rows,
                    'total' => $total,
                    'total_qte' => $total_qte));
    }

    public function ajoutArticleAction($article_id, $qte) {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $panier->ajoutArticle($article_id, $qte);
        $session->set('panier', $panier);
        $session->getFlashBag()->add('success', 'L\'article à été ajouté au panier.');
        return $this->redirect($this->generateUrl('contenuPanier'));
    }

    public function soustraitArticleAction($article_id) {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $panier->soustraitArticle($article_id);
        $session->set('panier', $panier);
        $session->getFlashBag()->add('success', 'Un exemplaire de l\'article à été retiré du panier.');
        return $this->redirect($this->generateUrl('contenuPanier'));
    }

    public function supprimerArticleAction($article_id) {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $panier->supprimeArticle($article_id);
        $session->set('panier', $panier);
        $session->getFlashBag()->add('success', 'L\'article à été retiré du panier.');
        return $this->redirect($this->generateUrl('contenuPanier'));
    }

    public function viderPanierAction() {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $panier->viderPanier();
        $session->set('panier', $panier);
        $session->getFlashBag()->add('success', 'Le panier à été vidé.');
        return $this->redirect($this->generateUrl('contenuPanier'));
    }

    public function validationPanierAction() {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');

        if (!isset($panier) || (isset($panier) && $panier->getContenu() == null)) {
            $session->getFlashBag()->add('warning', 'Votre panier est vide.');
            return $this->redirect($this->generateUrl('contenuPanier'));
        } 
        else {
            $organisation = $this->getUser();
            if ($organisation != NULL) {          
                $valide = true;
                
                $commande = new Commande();
                $commande->setOrganisation($organisation);
                $commande->setState("EN_ATTENTE_CREATION_CLIENT");
                $secret = "secret123"; //TODO generate
                $commande->setSecret($secret);

                $contenuPanier = $panier->getContenu();

                foreach ($contenuPanier as $produit_id => $qte) {
                    $produit = $em->getRepository('elinoixshopBundle:Produit')->find($produit_id);
                    $ligneCommande = new LigneCommande();
                    $ligneCommande->setProduit($produit);
                    $ligneCommande->setQuantite($qte);
                    $ligneCommande->setPrixUnitaire($produit->getPrix());
                    $ligneCommande->setPrixTotal($produit->getPrix() * $qte);
                    $ligneCommande->setCommande($commande);
                    $em->persist($ligneCommande);
                    
                    if ($produit->getQuantite() < $qte) {
                        $valide = false;
                        $commande->setState("ANNULE_PRODUITS_INDISPONIBLES");
                        $session->getFlashBag()->add('danger', 'Le produit "' . $produit->getNom() . '" n\'est plus disponible en quantité suffisante.');
                    }                        
                }

                if ($valide == true) {
                    $prixTotal = 0.0;
                    foreach ($contenuPanier as $produit_id => $qte) {
                        $produit = $em->getRepository('elinoixshopBundle:Produit')->find($produit_id);
                        $newQuantite = $produit->getQuantite() - $qte;
                        $produit->setQuantite($newQuantite);
                        $em->persist($produit);
                        
                        $prixTotal += $produit->getPrix() * $qte;
                    }
                    
                    $commande->setPrixTotal($prixTotal);
                    $em->persist($commande);
                    $em->flush();
                    //$panier->viderPanier(); //TODO : vider plus tard (validation terminee)
                    $session->set('panier', $panier);
                    $commande_id = $commande->getId();

                    return $this->redirect($this->generateUrl('commande_validation', array(
                        'id'  => $commande_id)));
                }
                else {
                    $em->persist($commande);
                    $em->flush();
                    $session->getFlashBag()->add('danger', 'La commande n\'a pas pu être validée.');
                    return $this->redirect($this->generateUrl('contenuPanier'));
                }     
            }
        }          
    }
    
    
    
    // Controller imbriqué
    public function menuPanierAction() {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $contenuPanier = $panier->getContenu();
        $rows = array();
        $total = 0;
        $total_qte = 0;

        if ($contenuPanier != null) {
            foreach ($contenuPanier as $idProduct => $qte) {
                $product = $this->getDoctrine()->getManager()->getRepository('elinoixshopBundle:Product')->find($idProduct);
                $total_price = $product->getPrice() * $qte;
                $rows[$idProduct] = array('product' => $product,
                    'qte' => $qte,
                    'total_price' => $total_price);
                $total += $total_price;
                $total_qte += $qte;
            }
        }
        return $this->render('elinoixshopBundle:Panier:menuPanier.html.twig', array('rows' => $rows,
                    'total' => $total,
                    'total_qte' => $total_qte));
    }

}
