<?php

namespace VTE\BackendVEGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VTEBackendVEGBundle:Default:index.html.twig', array('name' => $name));
    }
}
