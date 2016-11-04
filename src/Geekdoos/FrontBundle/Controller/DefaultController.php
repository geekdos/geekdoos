<?php

namespace Geekdoos\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekdoosFrontBundle:Default:index.html.twig');
    }
}
