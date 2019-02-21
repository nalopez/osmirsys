<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomePageController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function getHomeAction()
    {
        
    	$session = new Session();
    	$session->set('username', 'admin');

    	echo "<pre>";
    	var_dump($session->get('username'));
    	echo "</pre>";
    	

        return $this->render('base.html.twig');
        
    }
}