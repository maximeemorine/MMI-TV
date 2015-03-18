<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmitvBackBundle:Back:index.html.twig');
    }
}
