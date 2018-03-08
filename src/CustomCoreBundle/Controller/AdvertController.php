<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace CustomCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse; // N'oubliez pas ce use
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{



	public function indexAction($page)
  	{
	    
		// Notre liste d'annonce en dur
		$listAdverts = array(
			array(
				'title'   => 'Recherche développpeur Symfony',
				'id'      => 1,
				'author'  => 'Alexandre',
				'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
				'date'    => new \Datetime()
			),
			array(
				'title'   => 'Mission de webmaster',
				'id'      => 2,
				'author'  => 'Hugo',
				'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
				'date'    => new \Datetime()
			),
			array(
				'title'   => 'Offre de stage webdesigner',
				'id'      => 3,
				'author'  => 'Mathieu',
				'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
				'date'    => new \Datetime()
			)
		);

		// Et modifiez le 2nd argument pour injecter notre liste
		return $this->render('CustomCoreBundle:Advert:index.html.twig', array(
			'listAdverts' => $listAdverts
		));
  	}

	public function viewAction($id)
	{
		$url = $this->get('router')->generate('oc_platform_home');
		return new RedirectResponse($url);
	}

	public function menuAction()
  	{
	    // On fixe en dur une liste ici, bien entendu par la suite
	    // on la récupérera depuis la BDD !
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