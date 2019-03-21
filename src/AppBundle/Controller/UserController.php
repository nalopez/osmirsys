<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Manager\UserManager;

class UserController extends Controller
{
    /**
     * @Route("/users", name="users")
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
        $userList = $manager->getUsersByFilter([]);
        if (!is_array($userList)) {
            $userList = [$userList];
        }

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

        $defaultData = ['createdBy' => $session->get('userId')];
        $form = $this->createFormBuilder($defaultData)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, ['label' => 'Add User'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Save User
            $addResult = $manager->addUser($data);
            if (!empty($addResult)) {
                return $this->redirectToRoute('users');
            }
        }

        // replace this example code with whatever you need
        return $this->render('user/addUser.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
