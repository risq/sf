<?php

namespace elinoix\shopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use elinoix\shopBundle\Entity\Livraison;
use elinoix\shopBundle\Form\LivraisonType;
use elinoix\shopBundle\Entity\Commande;
use elinoix\shopBundle\Form\CommandeType;

/**
 * Livraison controller.
 *
 */
class LivraisonController extends Controller {

    /**
     * Lists all Livraison entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('elinoixshopBundle:Livraison')->findAll();

        return $this->render('elinoixshopBundle:Livraison:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Livraison entity.
     *
     */
    public function createAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $entity = new Livraison();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $entity->setOrganisation($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $id = $session->get('commande');
            $commande = $em->getRepository('elinoixshopBundle:Commande')->find($id);

            $entity->setCommande($commande);

            $em->persist($entity);
            $em->flush();
            $session->getFlashBag()->add('success', 'Mode de livraison validé');

            return $this->redirect($this->generateUrl('commande_validation', array('id' => $entity->getCommande())));
        }

        return $this->render('elinoixshopBundle:Livraison:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Livraison entity.
     *
     * @param Livraison $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Livraison $entity) {
        $form = $this->createForm(new LivraisonType(), $entity, array(
            'action' => $this->generateUrl('livraison_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider et passer à la commande'));

        return $form;
    }

    /**
     * Displays a form to create a new Livraison entity.
     *
     */
    public function newAction($id) {
        $session = $this->getRequest()->getSession();

        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$commande || $commande->getState() != "EN_ATTENTE_CREATION_CLIENT") {
            if ($commande->getState() == "EN_ATTENTE_VALIDATION_RECAP") {
                return $this->redirect($this->generateUrl('commande_recap', array('id' => $id)));
            } else {
                throw $this->createNotFoundException('Impossible de valider cette commande.');
            }
        }
        $session->set('commande', $commande);

        $entity = new Livraison();
        $form = $this->createCreateForm($entity);

        return $this->render('elinoixshopBundle:Livraison:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Livraison entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Livraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livraison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('elinoixshopBundle:Livraison:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Livraison entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Livraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livraison entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('elinoixshopBundle:Livraison:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Livraison entity.
     *
     * @param Livraison $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Livraison $entity) {
        $form = $this->createForm(new LivraisonType(), $entity, array(
            'action' => $this->generateUrl('livraison_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Livraison entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Livraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livraison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('livraison_edit', array('id' => $id)));
        }

        return $this->render('elinoixshopBundle:Livraison:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Livraison entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('elinoixshopBundle:Livraison')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Livraison entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('livraison'));
    }

    /**
     * Creates a form to delete a Livraison entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('livraison_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
