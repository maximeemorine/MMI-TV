<?php

namespace Mmitv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class FrontController extends Controller
{
    public function indexAction()
    {

    	$em = $this->getDoctrine()->getManager();
        $tweets = $em->getRepository('MmitvBackBundle:tweet')->findAll();
        $videos = $em->getRepository('MmitvBackBundle:videos')->findAll();

        return $this->render('MmitvFrontBundle:Front:index.html.twig', array(
            'tweets' => $tweets,
            'videos' => $videos
            ));
    }

    public function jsonAction()
    {

        $videos = $this->getDoctrine()
            ->getRepository("MmitvBackBundle:videos")
            ->findAll();

        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response($serializer->serialize($videos, "json"));
        $response
            ->headers
            ->set('Content-Type', 'application/json');

        return $response;
    }
}
