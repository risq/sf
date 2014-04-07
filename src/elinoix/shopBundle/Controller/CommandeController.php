<?php

namespace elinoix\shopBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use elinoix\shopBundle\Entity\Commande;

/**
 * Commande controller.
 *
 */
class CommandeController extends Controller
{

    /**
     * Lists all Commande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('elinoixshopBundle:Commande')->findAll();

        return $this->render('elinoixshopBundle:Commande:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Commande entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        return $this->render('elinoixshopBundle:Commande:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
    
    public function validationAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('elinoixshopBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        return $this->render('elinoixshopBundle:Commande:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
