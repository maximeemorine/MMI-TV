<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanningController extends Controller
{
    public function indexAction()
    {

    	// récupérer toutes les vidéos pour les afficher
    	$em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository('MmitvBackBundle:videos')->findAll();
        // ---

	    return $this->render('MmitvBackBundle:Planning:index.html.twig', array('videos' => $videos));
    }

    public function addAction()
    {
        return $this->render('MmitvBackBundle:Planning:add.html.twig');
    }
}
