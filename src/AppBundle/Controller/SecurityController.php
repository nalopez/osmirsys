<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use AppBundle\Manager\SecurityManager;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(
    	Request $request,
    	AuthenticationUtils $authenticationUtils,
    	SecurityManager $manager
   	) {
    	$params['username'] = $request->query->get('_username');
    	$params['password'] = $request->query->get('_password');

		if ($manager->checkLoginCredentials($params)) {
			return $this->redirectToRoute('homepage');
		}

	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    return $this->render('security/login.html.twig', [
	        'last_username' => $lastUsername,
	        'error' => $error,
	    ]);
	}

	/**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(
    	AuthenticationUtils $authenticationUtils,
    	SessionInterface $session
   	) {
    	// Set userId to none
    	$session->set('userId', null);

	    return $this->redirectToRoute('login');
	}
}