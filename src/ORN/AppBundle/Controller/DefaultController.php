<?php

namespace ORN\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORNAppBundle:Default:index.html.twig');
    }
}
