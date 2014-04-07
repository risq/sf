<?php

namespace elinoix\shopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use elinoix\shopBundle\Entity\Organisation;
use elinoix\shopBundle\Form\OrganisationType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
/**
 * Organisation controller.
 *
 */
class OrganisationController extends Controller {

    /**
     * Lists all Organisation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('elinoixshopBundle:Organisation')->findAll();

        return $this->render('elinoixshopBundle:Organisation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Organisation entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Organisation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('organisation_show', array('id' => $entity->getId())));
        }

        return $this->render('elinoixshopBundle:Organisation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Organisation entity.
     *
     * @param Organisation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Organisation $entity) {
        $form = $this->createForm(new OrganisationType(), $entity, array(
            'action' => $this->generateUrl('organisation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Organisation entity.
     *
     */
    public function newAction() {
        $entity = new Organisation();
        $form = $this->createCreateForm($entity);

        return $this->render('elinoixshopBundle:Organisation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Organisation entity.
     *
     */
    public function showAction($id) {
        $user = $this->getUser();
        
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN') &&
                $this->getUser()->getId() != $id) {
            throw new AccessDeniedException();
        }
        else {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('elinoixshopBundle:Organisation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Organisation entity.');
            }

            $deleteForm = $this->createDeleteForm($id);

            return $this->render('elinoixshopBundle:Organisation:show.html.twig', array(
                        'entity' => $entity,
                        'delete_form' => $deleteForm->createView(),));
        }
    }

    /**
     * Displays a form to edit an existing Organisation entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Organisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organisation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('elinoixshopBundle:Organisation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Organisation entity.
     *
     * @param Organisation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Organisation $entity) {
        $form = $this->createForm(new OrganisationType(), $entity, array(
            'action' => $this->generateUrl('organisation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Organisation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Organisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organisation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('organisation_edit', array('id' => $id)));
        }

        return $this->render('elinoixshopBundle:Organisation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Organisation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('elinoixshopBundle:Organisation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Organisation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('organisation'));
    }

    /**
     * Creates a form to delete a Organisation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('organisation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
