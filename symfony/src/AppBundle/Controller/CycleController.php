<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Constant\ApiConstant as ApiConst;
use AppBundle\Form\CycleType;
use AppBundle\Manager\CycleManager;
use AppBundle\Manager\PenManager;
use AppBundle\Manager\TenantManager;

class CycleController extends Controller
{
    /**
     * @Route("/cycles", name="viewCycles")
     */
    public function indexAction(
        Request $request,
        SessionInterface $session,
        CycleManager $manager
    ) {
        if (empty($session->get('username'))) {
            return $this->redirectToRoute('login');
        }

        // Get list of cycles
        $cycleList = $manager->getCyclesByFilter([], true);

        // replace this example code with whatever you need
        return $this->render('cycle/cycleList.html.twig', [
            'cycleList' => $cycleList,
        ]);
    }

    /**
     * @Route("/cycles/add/{tenantId}", name="addCycle")
     */
    public function addCycleAction(
        $tenantId,
        Request $request,
        SessionInterface $session,
        CycleManager $cycleManager,
        TenantManager $tenantManager,
        PenManager $penManager
    ) {
        if (empty($session->get('userId'))) {
            return $this->redirectToRoute('login');
        }

        // Get list of active tenants & pens
        $tenants = $tenantManager->getTenantsByFilter([], true);
        $pens = $penManager->getPensByFilter([], true);

        $form = $this->createForm(CycleType::class, [
            'process' => 'add',
            'label' => 'Add Cycle',
            'createdBy' => $session->get('userId'),
            'tenantId' => $tenantId,
            'tenants' => $tenants,
            'pens' => $pens,
        ]);
        $form->handleRequest($request);

        if ($form->get('cancel')->isClicked()) {
            return $this->redirectToRoute('viewCycles');
        } elseif ($form->get('save')->isClicked() && $form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Unset unnecessary data
            unset($data['process']);
            unset($data['label']);
            unset($data['userId']);
            unset($data['tenants']);
            unset($data['pens']);

            $data['startDate'] = $data['startDate']->format(ApiConst::DATE_TIME_YMD_DASH);
            $data['endDate'] = $data['endDate']->format(ApiConst::DATE_TIME_YMD_DASH);

            // Save Cycle
            $addResult = $cycleManager->addCycle($data);
            if (!empty($addResult)) {
                return $this->redirectToRoute('viewCycles');
            }
        }

        // replace this example code with whatever you need
        return $this->render('cycle/addCycle.html.twig', [
            'formHeader' => 'Add New Cycle',
            'form' => $form->createView(),
        ]);
    }
}
