<?php

namespace AppBundle\Model\Cycle;

use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOFilterInterface;

class CycleFilter extends AbstractFilter implements DTOFilterInterface
{
    private $cycleId;

    private $tenantId;

    public function getCycleIdFilter()
    {
        return $this->cycleId;
    }

    public function getTenantIdFilter()
    {
        return $this->tenantId;
    }

    public function setCycleIdFilter($cycleId)
    {
        $this->cycleId = $cycleId;
    }

    public function setTenantIdFilter($tenantId)
    {
        $this->tenantId = $tenantId;
    }

    public function getArr()
    {
        return [
            'cycleId' => $this->getCycleIdFilter(),
            'tenantId' => $this->getTenantIdFilter(),
        ];
    }

    public function getFilterToTableMap()
    {
        return [
            'cycleId' => DbConst::CYCLES_TBL_ID_A,
            'tenantId' => DbConst::CYCLES_TBL_TENTID_A,
        ];
    }
}