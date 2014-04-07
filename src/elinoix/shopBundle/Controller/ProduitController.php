<?php

namespace elinoix\shopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use elinoix\shopBundle\Entity\Produit;
use elinoix\shopBundle\Entity\Image;
use elinoix\shopBundle\Form\ProduitType;

/**
 * Produit controller.
 *
 */
class ProduitController extends Controller
{

    /**
     * Lists all Produit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('elinoixshopBundle:Produit')->findAll();

        return $this->render('elinoixshopBundle:Produit:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Produit entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Produit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('produit_show', array('id' => $entity->getId())));
        }

        return $this->render('elinoixshopBundle:Produit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Produit entity.
    *
    * @param Produit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Produit $entity)
    {
        $form = $this->createForm(new ProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Produit entity.
     *
     */
    public function newAction()
    {
        $entity = new Produit();
        $form   = $this->createCreateForm($entity);

        return $this->render('elinoixshopBundle:Produit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Produit entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('elinoixshopBundle:Produit:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Produit entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('elinoixshopBundle:Produit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Produit entity.
    *
    * @param Produit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Produit $entity)
    {
        $form = $this->createForm(new ProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Produit entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Produit')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }
        $oldImg = $entity->getImage()->getImage();
        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            if ($entity->getImage()->getImage() == NULL || $entity->getImage()->getImage() == "") {
                $entity->getImage()->setImage($oldImg);
            }
            $em->flush();

            return $this->redirect($this->generateUrl('produit_edit', array('id' => $id)));
        }

        return $this->render('elinoixshopBundle:Produit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Produit entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('elinoixshopBundle:Produit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('produit'));
    }

    /**
     * Creates a form to delete a Produit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produit_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function showProduitsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('elinoixshopBundle:Produit')->findAll();

        return $this->render('elinoixshopBundle:Produit:showProduits.html.twig', array(
            'entities' => $entities,
        ));
    }
}
