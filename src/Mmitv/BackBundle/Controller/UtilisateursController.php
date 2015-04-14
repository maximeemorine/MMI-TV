<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursController extends Controller
{
    public function indexAction()
    {

    		$em = $this->getDoctrine()->getEntityManager();
    		$user = $em->getRepository("MmitvBackBundleUserBundle:user")->findAll();

        return $this->render('MmitvBackBundle:Utilisateurs:index.html.twig', array('user' =>$user,));
    }

    public function addAction()
    {
        return $this->render('MmitvBackBundle:Utilisateurs:add.html.twig');
    }
}
