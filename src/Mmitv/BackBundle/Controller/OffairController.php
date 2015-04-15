<?php

namespace Mmitv\BackBundle\Controller;

use Mmitv\BackBundle\Form\offairType;
use Mmitv\BackBundle\Entity\offair;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class OffairController extends Controller
{
    public function indexAction(Request $request)
    {

    	$em = $this->getDoctrine()->getManager();
        $offairs = $em->getRepository('MmitvBackBundle:offair')->findAll();


        $offair = new offair();
	    $form = $this->createForm(new offairType(), $offair);

	    if ($form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($offair);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Vidéo bien ajoutée');

	      return $this->redirect($this->generateUrl('mmitv_back_offair_index', array('id' => $offair->getId())));
	    }

	    return $this->render('MmitvBackBundle:Offair:index.html.twig', array(
	      'form' => $form->createView(),
	      'offairs' => $offairs
	    ));

    }


    public function deleteAction($id)
    {

		$em = $this->getDoctrine()->getManager();
		$offair = $em->getRepository('MmitvBackBundle:offair')->find($id);
		$em->remove($offair);
		$em->flush();

		return $this->redirect($this->generateUrl('mmitv_back_offair_index'));
    }
}
