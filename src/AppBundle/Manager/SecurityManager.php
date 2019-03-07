<?php

namespace AppBundle\Manager;

use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use AppBundle\Constant\ApiConstant as ApiConst;
use AppBundle\Manager\SecurityManager;
use AppBundle\Model\User\User;
use AppBundle\Model\User\UserDAO;
use AppBundle\Model\User\UserFilter;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;
use AppBundle\Util\Helper\SecurityHelperTrait;

class SecurityManager 
{
	use SecurityHelperTrait;

	public $userManager;
	public $session;

    public function __construct(
    	UserManager $userManager,
    	SessionInterface $session
    ) {
		$this->userManager = $userManager;
		$this->session = $session;
    }

    public function checkLoginCredentials($params)
    {
    	// Get user credential using username
		$getUserResponse = $this->userManager->getUsersByFilter([
			'username' => $params['username'],
		]);
		if (empty($getUserResponse) || !$this->checkIfPasswordsMatch($getUserResponse, $params['password'])) {
			return false;
		}

		// TODO:
		// if user is locked, add handling here

		// Update last login date
		$this->userManager->updateUser([
			'userId' => $getUserResponse->getUserId(),
			'lastLogin' => date(ApiConst::DATE_TIME_YMDHIS),
		]);

		// Start session and set session details
		$this->session->start();
		$this->session->set('userId', $getUserResponse->getUserId());
		$this->session->set('username', $getUserResponse->getUsername());
		$this->session->set('firstName', $getUserResponse->getFirstName());
		$this->session->set('lastName', $getUserResponse->getLastName());
		$this->session->set('lastLogin', date(ApiConst::DATE_TIME_YMDHIS));

		return true;
    }
}