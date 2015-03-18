<?php

namespace Mmitv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MmitvFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
