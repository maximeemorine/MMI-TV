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

    public function editAction($id)
    {
         if (false === $this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
        throw new AccessDeniedException();
    }
         $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MmitvBackBundleUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
        return $this->render('MmitvBackBundle:Utilisateurs:edit.html.twig');
    }
}
