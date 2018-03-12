<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
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
		return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
			'listAdverts' => $listAdverts
		));
  	}

	public function viewAction($id)
	{
		$url = $this->get('router')->generate('oc_platform_home');

		return new RedirectResponse($url);
	}
	
	public function addAction(Request $request)
	{
	    // Création de l'entité
	    $advert = new Advert();
	    $advert->setTitle('Recherche développeur Symfony.');
	    $advert->setAuthor('Alexandre');
	    $advert->setDate(new \DateTime());
	    $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
	    // On peut ne pas définir ni la date ni la publication,
	    // car ces attributs sont définis automatiquement dans le constructeur
	    
	    // On récupère l'EntityManager
	    $em = $this->getDoctrine()->getManager();	    
	    // Étape 1 : On « persiste » l'entité
	    $em->persist($advert);	    
	    // Étape 2 : On « flush » tout ce qui a été persisté avant
	    $em->flush();
	    
	    // Reste de la méthode qu'on avait déjà écrit
	    if ($request->isMethod('POST')) {
	        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	        
	        // Puis on redirige vers la page de visualisation de cettte annonce
	        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
	    }
	    
	    // Si on n'est pas en POST, alors on affiche le formulaire
	    return $this->render('OCPlatformBundle:Advert:add.html.twig', array('advert' => $advert));
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

	    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
	      // Tout l'intérêt est ici : le contrôleur passe
	      // les variables nécessaires au template !
	      'listAdverts' => $listAdverts
	    ));
  	}
  	
  	
  	
}