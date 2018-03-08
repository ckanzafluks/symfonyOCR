<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {


    	$mailer = $this->container->get('mailer'); 

    	die;

        return $this->render('@OCPlatform/Default/index.html.twig');
    }
}
