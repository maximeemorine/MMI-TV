<?php

namespace Mmitv\BackBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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
