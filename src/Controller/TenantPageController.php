<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Service\TenantManager;

class TenantPageController extends AbstractController
{
    /**
     * @Route("/tenants", name="tenants")
     */
    public function getTenantAction(
    	TenantManager $manager,
    	Request $request
    ) {
    	if ($request->hasSession()) {
    		echo "<pre>";
    		var_dump('nixnix');
    		echo "</pre>";
    		
    	}

    	$session = $request->getSession();
    	$session->invalidate();    	

    	if ($session->get('username')) {
    		echo "<pre>";
    		var_dump('nixnix');
    		echo "</pre>";
    		
    	}

    	echo "<pre>";
    	var_dump($manager->getTenants());
    	echo "</pre>";
    	

        return $this->render('tenant/tenantList.html.twig');
    }
}