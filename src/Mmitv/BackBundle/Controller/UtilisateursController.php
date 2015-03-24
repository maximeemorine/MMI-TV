<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmitvBackBundle:Utilisateurs:index.html.twig');
    }

    public function addAction()
    {
        return $this->render('MmitvBackBundle:Utilisateurs:add.html.twig');
    }
}
