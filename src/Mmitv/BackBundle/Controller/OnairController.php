<?php

namespace Mmitv\BackBundle\Controller;

use Mmitv\BackBundle\Form\onairType;
use Mmitv\BackBundle\Entity\onair;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class OnairController extends Controller
{
    public function indexAction(Request $request)
    {

    	$em = $this->getDoctrine()->getManager();
        $onairs = $em->getRepository('MmitvBackBundle:onair')->findAll();


        $onair = new onair();
	    $form = $this->createForm(new onairType(), $onair);

	    if ($form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($onair);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Vidéo bien ajoutée');

	      return $this->redirect($this->generateUrl('mmitv_back_onair_index', array('id' => $onair->getId())));
	    }

	    return $this->render('MmitvBackBundle:Onair:index.html.twig', array(
	      'form' => $form->createView(),
	      'onairs' => $onairs
	    ));

    }


    public function deleteAction($id)
    {

		$em = $this->getDoctrine()->getManager();
		$onair = $em->getRepository('MmitvBackBundle:onair')->find($id);
		$em->remove($onair);
		$em->flush();

		return $this->redirect($this->generateUrl('mmitv_back_onair_index'));
    }
}
