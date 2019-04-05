<?php

namespace AppBundle\Model\Tenant;

use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOFilterInterface;

class TenantFilter extends AbstractFilter implements DTOFilterInterface
{
    private $tenantId;

    //private $username;

    public function getTenantIdFilter()
    {
        return $this->tenantId;
    }

    /*public function getUsernameFilter()
    {
        return $this->username;
    }*/

    public function setTenantIdFilter($tenantId)
    {
        $this->tenantId = $tenantId;
    }

    /*public function setUsernameFilter($username)
    {
        $this->username = $username;
    }*/

    public function getArr()
    {
        return [
            'tenantId' => $this->getTenantIdFilter(),
            //'username' => $this->getUsernameFilter(),
        ];
    }

    public function getFilterToTableMap()
    {
        return [
            'tenantId' => DbConst::TENANTS_TBL_ID_A,
            //'username' => DbConst::USERS_TBL_USERNAME_A,
        ];
    }
}