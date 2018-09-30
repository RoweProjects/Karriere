<?php

namespace PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/Frontend")
     */
    public function indexAction()
    {
        return $this->render('@Prueba/Default/index.html.twig');
    }
}
