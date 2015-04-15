<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function editDropAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $id = $request->request->get('id');
        $debut = $request->request->get('debut');

        $video = $em->getRepository('MmitvBackBundle:videos')->find($id); //On va chercher l'tweet séléctionné

        if (!$video) {
            throw new NotFoundHttpException("Cette vidéo n'existe pas."); //Sécurité
        }

        $video->setDebutVideos(new \DateTime($debut));

        $em->persist($video);
        $em->flush();
        return $this->redirect($this->generateUrl('mmitv_back_planning_index', array('id' => $video->getId())));

    }

    public function editDragAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $id = $request->request->get('id');
        $debut = $request->request->get('start');

        $video = $em->getRepository('MmitvBackBundle:videos')->find($id); //On va chercher la vidéo séléctionnée

        if (!$video) {
            throw new NotFoundHttpException("Cette vidéo n'existe pas."); //Sécurité
        }

        $video->setDebutVideos(new \DateTime($debut));

        $em->persist($video);
        $em->flush();
        return $this->redirect($this->generateUrl('mmitv_back_planning_index', array('id' => $video->getId())));

    }

    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $id = $request->request->get('id');
        $debut = '1970-01-01 00:00:00';

        $video = $em->getRepository('MmitvBackBundle:videos')->find($id); //On va chercher la vidéo séléctionnée

        if (!$video) {
            throw new NotFoundHttpException("Cette vidéo n'existe pas."); //Sécurité
        }

        $video->setDebutVideos(new \DateTime($debut));

        $em->persist($video);
        $em->flush();
        return $this->redirect($this->generateUrl('mmitv_back_planning_index', array('id' => $video->getId())));
    }
}
