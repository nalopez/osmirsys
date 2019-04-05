<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Form\TenantType;
use AppBundle\Manager\PenManager;

class PenController extends Controller
{
    /**
     * @Route("/pens", name="viewPens")
     */
    public function indexAction(
        Request $request,
        SessionInterface $session,
        PenManager $manager
    ) {
        if (empty($session->get('username'))) {
            return $this->redirectToRoute('login');
        }

        // Get list of users
        $penList = $manager->getPensByFilter([], true);

        // replace this example code with whatever you need
        return $this->render('pen/penList.html.twig', [
            'penList' => $penList,
        ]);
    }

    /**
     * @Route("/pens/add", name="addPen")
     */
    public function addTenantAction(
        Request $request,
        SessionInterface $session,
        PenManager $manager
    ) {
        if (empty($session->get('userId'))) {
            return $this->redirectToRoute('login');
        }

        $form = $this->createForm(TenantType::class, [
            'process' => 'add',
            'label' => 'Add Tenant',
            'createdBy' => $session->get('userId'),
        ]);
        $form->handleRequest($request);

        if ($form->get('cancel')->isClicked()) {
            return $this->redirectToRoute('viewTenants');
        } elseif ($form->get('save')->isClicked() && $form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Unset unnecessary data
            unset($data['process']);
            unset($data['label']);
            unset($data['userId']);

            // Save User
            $addResult = $manager->addTenant($data);
            if (!empty($addResult)) {
                return $this->redirectToRoute('viewTenants');
            }
        }

        // replace this example code with whatever you need
        return $this->render('tenant/addTenant.html.twig', [
            'formHeader' => 'Add New Tenant',
            'form' => $form->createView(),
        ]);
    }
}
