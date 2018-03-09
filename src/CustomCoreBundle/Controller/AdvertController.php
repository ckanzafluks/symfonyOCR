<?php

namespace CustomCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse; // N'oubliez pas ce use
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{



	public function indexAction($page)
  	{
	    return $this->render('CustomCoreBundle:Advert:index.html.twig', array(
			'listAdverts' => $listAdverts
		));
  	}

	public function viewAction($id)
	{
		$url = $this->get('router')->generate('custome_core_home');
		return new RedirectResponse($url);
	}

	public function menuAction()
  	{
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );        
	    return $this->render('CustomCoreBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
	    ));
  	}
  	
}