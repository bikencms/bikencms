<?php

namespace ORN\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORNAdminBundle:Default:index.html.twig');
    }
}
