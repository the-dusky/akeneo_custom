<?php

namespace SandyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        phpinfo();
        return $this->render('SandyBundle:Default:index.html.twig');
    }
}
