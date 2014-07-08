<?php

namespace elinoix\shopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use elinoix\shopBundle\Entity\Commande;
use elinoix\shopBundle\Form\CommandeType;

/**
 * Commande controller.
 *
 */
class CommandeController extends Controller {

    /**
     * Lists all Commande entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('elinoixshopBundle:Commande')->findAll();

        return $this->render('elinoixshopBundle:Commande:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Commande entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Commande();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('commande_show', array('id' => $entity->getId())));
        }

        return $this->render('elinoixshopBundle:Commande:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Commande entity.
     *
     * @param Commande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Commande $entity) {
        $form = $this->createForm(new CommandeType(), $entity, array(
            'action' => $this->generateUrl('commande_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Commande entity.
     *
     */
    public function newAction() {
        $entity = new Commande();
        $form = $this->createCreateForm($entity);

        return $this->render('elinoixshopBundle:Commande:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commande entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$commande) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        if ($commande->getState() == "EN_ATTENTE_VALIDATION_RECAP") {
            return $this->redirect($this->generateUrl('commande_recap', array('id' => $id)));
        }

        return $this->render('elinoixshopBundle:Commande:show.html.twig', array(
                    'entity' => $commande,
        ));
    }

    /**
     * Displays a form to edit an existing Commande entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('elinoixshopBundle:Commande:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Commande entity.
     *
     * @param Commande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Commande $entity) {
        $form = $this->createForm(new CommandeType(), $entity, array(
            'action' => $this->generateUrl('commande_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Edits an existing Commande entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $entity = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de valider la commande. Veuillez réessayer.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $organisation = $this->getUser();

            if ($entity->getOrganisation() != $organisation) {
                throw $this->createNotFoundException('Impossible de valider la commande. Veuillez réessayer.');
            }

            if ($entity->getState() == "EN_ATTENTE_CREATION_CLIENT") { // update de la création d'un client (validation commande)
                $entity->setState("EN_ATTENTE_VALIDATION_RECAP");
                //$entity->setState("EN_ATTENTE_SELECTION_LIVRAISON");
                $em->flush();
                $session->getFlashBag()->add('success', 'Votre compte client a bien été créé. Merci de valider les informations suivantes avant de procéder au paiement.');
                //$session->getFlashBag()->add('success', 'Votre compte client a bien été créé. Merci de votre moyen de livraison.');
                return $this->redirect($this->generateUrl('commande_recap', array('id' => $id)));
                //return $this->redirect($this->generateUrl('commande_recap', array('id' => $id)));
            } else if ($entity->getState() == "EN_ATTENTE_VALIDATION_RECAP") { // update de modification de données client
                $em->flush();
                $session->getFlashBag()->add('success', 'Les informations ont bien été modifiées.');
                return $this->redirect($this->generateUrl('commande_show', array('id' => $id)));
            }
            else {
                throw $this->createNotFoundException('Impossible de valider la commande. Veuillez réessayer...');
            }
        }

        return $this->render('elinoixshopBundle:Commande:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Commande entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('elinoixshopBundle:Commande')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commande entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commande'));
    }

    /**
     * Creates a form to delete a Commande entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('commande_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function validationAction($id) { //todo: ajouter secret
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$commande || $commande->getState() != "EN_ATTENTE_CREATION_CLIENT") {
            if ($commande->getState() == "EN_ATTENTE_VALIDATION_RECAP") {
                return $this->redirect($this->generateUrl('commande_recap', array('id' => $id)));
            }
            else {
                throw $this->createNotFoundException('Impossible de valider cette commande.');
            }
        }

        $editForm = $this->createEditForm($commande);

        return $this->render('elinoixshopBundle:Commande:validation.html.twig', array(
            'entity' => $commande,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function selectLivraisonAction($id) {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$commande || $commande->getState() != "EN_ATTENTE_CREATION_CLIENT") {
            if ($commande->getState() == "EN_ATTENTE_VALIDATION_RECAP") {
                return $this->redirect($this->generateUrl('commande_recap', array('id' => $id)));
            }
            else {
                throw $this->createNotFoundException('Impossible de valider cette commande. Veuillez réessayer.');
            }
        }

        return $this->render('elinoixshopBundle:Commande:selectLivraison.html.twig', array(
            'entity' => $commande
        ));
    }

    public function recapAction($id) { //todo: ajouter secret
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$commande) {
            throw $this->createNotFoundException('Impossible de valider cette commande. Veuillez réessayer.');
        }

        if ($commande->getState() != "EN_ATTENTE_VALIDATION_RECAP") {
            $session->getFlashBag()->add('warning', 'La commande à déjà été validée.');
            return $this->redirect($this->generateUrl('commande_show', array('id' => $id)));
        }



        return $this->render('elinoixshopBundle:Commande:recap.html.twig', array(
            'entity' => $commande,
        ));
    }

    public function validerRecapAction($id) { //todo: ajouter secret
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $commande = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$commande) {
            throw $this->createNotFoundException('Impossible de valider cette commande.');
        }

        if ($commande->getState() != "EN_ATTENTE_VALIDATION_RECAP") {
            $session->getFlashBag()->add('warning', 'La commande déjà été validée.');
            return $this->redirect($this->generateUrl('commande_show', array('id' => $id)));
        }

        $commande->setState("VALIDEE_EN_ATTENTE_PAIEMENT");
        $em->flush();
        $session->getFlashBag()->add('success', 'La commande a été validée avec succès.');
        return $this->redirect($this->generateUrl('commande_show', array('id' => $id)));
    }
    
    

}
