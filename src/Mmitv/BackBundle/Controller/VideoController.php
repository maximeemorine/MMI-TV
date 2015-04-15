<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mmitv\BackBundle\Form\videosType;
use Mmitv\BackBundle\Entity\videos;
use Symfony\Component\HttpFoundation\Request;

class VideoController extends Controller
{
    public function indexAction()
    {

    	// récupérer toutes les vidéos pour les afficher
    	$em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository('MmitvBackBundle:videos')->findAll();
        // ---

	    return $this->render('MmitvBackBundle:Video:index.html.twig', array('videos' => $videos));

    }

    public function addAction(Request $request)
    {

       	// ajouter une video par le formulaire
        $video = new videos();
	    $form = $this->createForm(new videosType(), $video);

	    if ($form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($video);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Vidéo bien ajoutée');

	      return $this->redirect($this->generateUrl('mmitv_back_video_index', array('id' => $video->getId())));
	    }

	    return $this->render('MmitvBackBundle:Video:add.html.twig', array(
	      'form' => $form->createView(),
	    ));
	    // ---
    }

    public function editAction(Request $request, $id){

    	$em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('MmitvBackBundle:videos')->find($id); //On va chercher l'tweet séléctionné
        if (!$video) {
            throw new NotFoundHttpException("Cette vidéo n'existe pas."); //Sécurité
        }
        $form = $this->createForm(new videosType(), $video); //On génère le formulaire

        // Envoie dans le BDD
        if ($form->handleRequest($request)->isValid()) {
            $em->persist($video);
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_back_video_index'));
        }

        return $this->render('MmitvBackBundle:video:edit.html.twig', array('form' => $form->createView()));
    }

    public function deleteAction($id)
    {

		$em = $this->getDoctrine()->getManager();
		$video = $em->getRepository('MmitvBackBundle:videos')->find($id);
		$em->remove($video);
		$em->flush();

		return $this->redirect($this->generateUrl('mmitv_back_video_index'));
    }
}
