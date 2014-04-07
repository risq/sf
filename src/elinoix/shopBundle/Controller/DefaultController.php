<?php

namespace elinoix\shopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('elinoixshopBundle:Default:index.html.twig');
    }
}
