<?php

namespace Aivus\SonataMediaBundle\ResizerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AivusResizerBundle:Default:index.html.twig', array('name' => $name));
    }
}
