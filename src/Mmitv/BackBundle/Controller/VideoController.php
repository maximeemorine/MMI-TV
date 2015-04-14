<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mmitv\BackBundle\Entity\videos;
use Mmitv\BackBundle\Form\videosType;
use Mmitv\BackBundle\Entity\membre;
use Symfony\Component\HttpFoundation\Request;

class VideoController extends Controller
{
    public function indexAction(Request $request)
    {
        // récupérer toutes les vidéos pour les afficher
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository('MmitvBackBundle:videos')->findAll();

        // ---

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

        return $this->render('MmitvBackBundle:Video:index.html.twig', array(
            'form' => $form->createView(),
            'videos' => $videos
        ));
        // ---
    }

    public function addAction()
    {
        return $this->render('MmitvBackBundle:Video:add.html.twig');
    }
}
