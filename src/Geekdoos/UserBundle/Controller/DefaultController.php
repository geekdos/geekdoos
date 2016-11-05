<?php

namespace Geekdoos\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@GeekdoosFront/Default/index.html.twig');
    }
}
