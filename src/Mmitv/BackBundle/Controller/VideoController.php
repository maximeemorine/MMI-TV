<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VideoController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmitvBackBundle:Video:index.html.twig');
    }

    public function addAction()
    {
        return $this->render('MmitvBackBundle:Video:add.html.twig');
    }
}
