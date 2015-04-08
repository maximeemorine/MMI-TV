<?php

namespace Mmitv\BackBundle\Controller;

use Mmitv\BackBundle\Form\tweetType;
use Mmitv\BackBundle\Entity\tweet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TwitterController extends Controller
{
    public function indexAction(Request $request)
    {

    	$em = $this->getDoctrine()->getManager();
        $tweets = $em->getRepository('MmitvBackBundle:tweet')->findAll();


        $tweet = new tweet();
	    $form = $this->createForm(new tweetType(), $tweet);

	    if ($form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($tweet);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Tweet bien ajouté');

	      return $this->redirect($this->generateUrl('mmitv_back_twitter_index', array('id' => $tweet->getId())));
	    }

	    return $this->render('MmitvBackBundle:Twitter:index.html.twig', array(
	      'form' => $form->createView(),
	      'tweets' => $tweets
	    ));

    }

    public function editAction(Request $request, $id){

    	$em = $this->getDoctrine()->getManager();
        $tweet = $em->getRepository('MmitvBackBundle:tweet')->find($id); //On va chercher l'tweet séléctionné
        if (!$tweet) {
            throw new NotFoundHttpException("Ce tweet n'existe pas."); //Sécurité
        }
        $form = $this->createForm(new tweetType(), $tweet); //On génère le formulaire

        // Envoie dans le BDD
        if ($form->handleRequest($request)->isValid()) {
            $em->persist($tweet);
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_back_twitter_index'));
        }

        return $this->render('MmitvBackBundle:twitter:edit.html.twig', array('form' => $form->createView()));

    }

    public function deleteAction($id)
    {

		$em = $this->getDoctrine()->getManager();
		$tweet = $em->getRepository('MmitvBackBundle:tweet')->find($id);
		$em->remove($tweet);
		$em->flush();

		return $this->redirect($this->generateUrl('mmitv_back_twitter_index'));
    }
}
