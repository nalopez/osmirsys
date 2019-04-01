<?php

namespace AppBundle\Model\User;

use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOFilterInterface;

class UserFilter extends AbstractFilter implements DTOFilterInterface
{
    private $userId;

    private $username;

    public function getUserIdFilter()
    {
        return $this->userId;
    }

    public function getUsernameFilter()
    {
        return $this->username;
    }

    public function setUserIdFilter($userId)
    {
        $this->userId = $userId;
    }

    public function setUsernameFilter($username)
    {
        $this->username = $username;
    }

    public function getArr()
    {
        return [
            'userId' => $this->getUserIdFilter(),
            'username' => $this->getUsernameFilter(),
        ];
    }

    public function getFilterToTableMap()
    {
        return [
            'userId' => DbConst::USERS_TBL_ID_A,
            'username' => DbConst::USERS_TBL_USERNAME_A,
        ];
    }
}