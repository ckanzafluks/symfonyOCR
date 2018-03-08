<?php

namespace CustomCoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    
    
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        //return $this->render('@OCPlatform/Default/index.html.twig'); 
        return $this->render('@CustomCore/Default/index.html.twig'); 
    }
    
    
    
    
}
