<?php

namespace HT\Nowy3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('HTNowy3Bundle:Default:index.html.twig', array('name' => $name));
    }
}
