<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Form\UserType;
use AppBundle\Manager\UserManager;

class UserController extends Controller
{
    /**
     * @Route("/users", name="viewUsers")
     */
    public function indexAction(
        Request $request,
        SessionInterface $session,
        UserManager $manager
    ) {
        if (empty($session->get('username'))) {
            return $this->redirectToRoute('login');
        }

        // Get list of users
        $userList = $manager->getUsersByFilter([], true);

        // replace this example code with whatever you need
        return $this->render('user/userList.html.twig', [
            'userList' => $userList,
        ]);
    }

    /**
     * @Route("/users/add", name="addUser")
     */
    public function addUserAction(
        Request $request,
        SessionInterface $session,
        UserManager $manager
    ) {
        if (empty($session->get('userId'))) {
            return $this->redirectToRoute('login');
        }

        $form = $this->createForm(UserType::class, [
            'process' => 'add',
            'label' => 'Add User',
            'createdBy' => $session->get('userId'),
        ]);
        $form->handleRequest($request);

        if ($form->get('cancel')->isClicked()) {
            return $this->redirectToRoute('viewUsers');
        } elseif ($form->get('save')->isClicked() && $form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Unset unnecessary data
            unset($data['process']);
            unset($data['label']);
            unset($data['userId']);

            // Save User
            $addResult = $manager->addUser($data);
            if (!empty($addResult)) {
                return $this->redirectToRoute('viewUsers');
            }
        }

        // replace this example code with whatever you need
        return $this->render('user/addUser.html.twig', [
            'formHeader' => 'Add New User',
            'form' => $form->createView(),
            'errors' => $form->getErrors(),
        ]);
    }

    /**
     * @Route("/users/edit/{userId}", name="editUser")
     */
    public function editUserAction(
        $userId,
        Request $request,
        SessionInterface $session,
        UserManager $manager
    ) {
        if (empty($session->get('userId'))) {
            return $this->redirectToRoute('login');
        }

        // get user details
        $getResult = $manager->getUsersByFilter([
            'userId' => $userId,
        ]);
        if (!$getResult) {
            // set flash message here
            return $this->redirectToRoute('viewUsers');
        }

        $form = $this->createForm(UserType::class, [
            'process' => 'edit',
            'label' => 'Edit User',
            'updatedBy' => $session->get('userId'),
            'userId' => $getResult->getUserId(),
            'firstName' => $getResult->getFirstName(),
            'lastName' => $getResult->getLastName(),
            'username' => $getResult->getUsername(),
        ]);
        $form->handleRequest($request);

        if ($form->get('cancel')->isClicked()) {
            return $this->redirectToRoute('viewUsers');
        } elseif ($form->get('save')->isClicked() && $form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Unset unnecessary data
            unset($data['process']);
            unset($data['label']);
            unset($data['username']);

            // Edit User
            $addResult = $manager->updateUser($data);
            if (!empty($addResult)) {
                return $this->redirectToRoute('viewUsers');
            }
        }

        // replace this example code with whatever you need
        return $this->render('user/addUser.html.twig', [
            'formHeader' => 'Edit User',
            'form' => $form->createView(),
        ]);
    }
}
