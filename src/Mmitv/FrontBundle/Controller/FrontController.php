<?php

namespace Mmitv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {

    	$em = $this->getDoctrine()->getManager();
        $tweets = $em->getRepository('MmitvBackBundle:tweet')->findAll();

        return $this->render('MmitvFrontBundle:Front:index.html.twig', array('tweets' => $tweets));
    }
}
