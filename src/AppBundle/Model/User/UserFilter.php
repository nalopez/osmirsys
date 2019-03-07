<?php

namespace AppBundle\Model\User;

use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOFilterInterface;

class UserFilter extends AbstractFilter implements DTOFilterInterface
{
    private $username;

    public function getUsernameFilter()
    {
        return $this->username;
    }

    public function setUsernameFilter($username)
    {
        $this->username = $username;
    }

    public function getArr()
    {
        return [
            'username' => $this->getUsernameFilter(),
        ];
    }

    public function getFilterToTableMap()
    {
        return [
            'username' => DbConst::USERS_TBL_USERNAME,
        ];
    }
}