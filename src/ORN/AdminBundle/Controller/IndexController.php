<?php

namespace ORN\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORNAdminBundle:Index:index.html.twig', array(
            // ...
        ));
    }

}
