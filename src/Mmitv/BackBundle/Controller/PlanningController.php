<?php

namespace Mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanningController extends Controller
{
    public function indexAction()
    {
        return $this->render('MmitvBackBundle:Planning:index.html.twig');
    }

    public function addAction()
    {
        return $this->render('MmitvBackBundle:Planning:add.html.twig');
    }
}
