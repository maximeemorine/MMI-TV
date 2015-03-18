<?php

namespace Mmitv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmitvFrontBundle:Front:index.html.twig');
    }
}
