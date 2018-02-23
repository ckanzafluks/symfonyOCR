<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController 
{
    public function indexAction()
    {
        ///return $this->render('@OCPlatform/Advert/index.html.twig');
        return new Response("Notre propre Hello World !");
    }
}


/*

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController
{
    public function indexAction()
    {
        return new Response("Notre propre Hello World !");
    }
}
*/