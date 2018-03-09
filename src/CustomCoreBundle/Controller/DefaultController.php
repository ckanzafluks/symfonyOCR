<?php

namespace CustomCoreBundle\Controller;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    
    
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('@CustomCore/Default/index.html.twig'); 
    }
    
    private function _initMenus() {
        
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );
        
        $this->render('CustomCoreBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }
    
    
    public function contactAction(Request $request) {
        $session = $request->getSession();
        $session->getFlashBag()->add('info', 'La page de contact n\'est pas encore disponible. Merci de revenir plus tard!');
        return $this->redirectToRoute('custom_core_homepage');
    }
    
    
    
    
}
