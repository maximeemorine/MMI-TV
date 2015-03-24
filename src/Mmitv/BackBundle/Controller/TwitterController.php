<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TwitterController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmitvBackBundle:Twitter:index.html.twig');
    }

    public function addAction()
    {
        return $this->render('MmitvBackBundle:Twitter:add.html.twig');
    }
}
