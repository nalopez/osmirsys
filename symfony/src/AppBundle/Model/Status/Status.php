<?php

namespace AppBundle\Model\Status;

use AppBundle\Base\AbstractDTO;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOInterface;

class Status extends AbstractDTO implements DTOInterface
{
    private $statusId;

    private $statusName;

    private $statusCode;

    public function getStatusId()
    {
        return $this->statusId;
    }

    public function getStatusName()
    {
        return $this->statusName;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    }

    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function getArr()
    {
        return [
            'statusId' => $this->getStatusId(),
            'statusName' => $this->getStatusName(),
            'statusCode' => $this->getStatusCode(),
        ];
    }

    public function getDtoToTableMap()
    {
        return [
            'statusId' => DbConst::STATUSES_TBL_ID,
            'statusName' => DbConst::STATUSES_TBL_STSNAME,
            'statusCode' => DbConst::STATUSES_TBL_STSCODE,
        ];
    }
}