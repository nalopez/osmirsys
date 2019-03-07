<?php

namespace AppBundle\Model\Status;

use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOFilterInterface;

class StatusFilter extends AbstractFilter implements DTOFilterInterface
{
    private $statusCode;

    public function getStatusCodeFilter()
    {
        return $this->statusCode;
    }

    public function setStatusCodeFilter($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function getArr()
    {
        return [
            'statusCode' => $this->getStatusCodeFilter(),
        ];
    }

    public function getFilterToTableMap()
    {
        return [
            'statusCode' => DbConst::STATUSES_TBL_STSCODE,
        ];
    }
}