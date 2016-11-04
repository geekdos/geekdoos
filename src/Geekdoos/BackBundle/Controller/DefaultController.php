<?php

namespace Geekdoos\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekdoosBackBundle:Default:index.html.twig');
    }
}
