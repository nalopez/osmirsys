<?php

namespace AppBundle\Model\Cycle;

use AppBundle\Base\AbstractDTO;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOInterface;

class Cycle extends AbstractDTO implements DTOInterface
{
    private $cycleId;

    private $penId;

    private $tenantId;

    private $cycleCount;

    private $headCount;

    private $statusId;

    private $startDate;

    private $endDate;

    private $dateCreated;

    private $dateUpdated;

    private $createdBy;

    private $updatedBy;

    private $penCode;

    private $locationName;

    private $firstName;

    private $lastName;

    private $statusName;

    private $statusCode;

    private $createdByUsername;

    public function getCycleId()
    {
        return $this->cycleId;
    }

    public function getPenId()
    {
        return $this->penId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function getCycleCount()
    {
        return $this->cycleCount;
    }

    public function getHeadCount()
    {
        return $this->headCount;
    }

    public function getStatusId()
    {
        return $this->statusId;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    public function getPenCode()
    {
        return $this->penCode;
    }

    public function getLocationName()
    {
        return $this->locationName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getStatusName()
    {
        return $this->statusName;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getCreatedByUsername()
    {
        return $this->createdByUsername;
    }

    public function setCycleId($cycleId)
    {
        $this->cycleId = $cycleId;
    }

    public function setPenId($penId)
    {
        $this->penId = $penId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
    }

    public function setCycleCount($cycleCount)
    {
        $this->cycleCount = $cycleCount;
    }

    public function setHeadCount($headCount)
    {
        $this->headCount = $headCount;
    }

    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    public function setPenCode($penCode)
    {
        $this->penCode = $penCode;
    }

    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function setCreatedByUsername($createdByUsername)
    {
        $this->createdByUsername = $createdByUsername;
    }

    public function getArr()
    {
        return [
            'cycleId' => $this->getCycleId(),
            'penId' => $this->getPenId(),
            'tenantId' => $this->getTenantId(),
            'cycleCount' => $this->getCycleCount(),
            'headCount' => $this->getHeadCount(),
            'statusId' => $this->getStatusId(),
            'startDate' => $this->getStartDate(),
            'endDate' => $this->getEndDate(),
            'dateCreated' => $this->getDateCreated(),
            'dateUpdated' => $this->getDateUpdated(),
            'createdBy' => $this->getCreatedBy(),
            'updatedBy' => $this->getUpdatedBy(),
            'penCode' => $this->getPenCode(),
            'locationName' => $this->getLocationName(),
            'firstName' => $this->getFirstName(),
            'lastName' => $this->getLastName(),
            'statusName' => $this->getStatusName(),
            'statusCode' => $this->getStatusCode(),
            'createdByUsername' => $this->getCreatedByUsername(),
        ];
    }

    public function getDtoToTableMap()
    {
        return [
            'cycleId' => DbConst::CYCLES_TBL_ID,
            'penId' => DbConst::CYCLES_TBL_PENID,
            'tenantId' => DbConst::CYCLES_TBL_TENTID,
            'cycleCount' => DbConst::CYCLES_TBL_CYLCNT,
            'headCount' => DbConst::CYCLES_TBL_HDCNT,
            'statusId' => DbConst::CYCLES_TBL_STSID,
            'startDate' => DbConst::CYCLES_TBL_STRTDATE,
            'endDate' => DbConst::CYCLES_TBL_ENDDATE,
            'dateCreated' => DbConst::CYCLES_TBL_DATECRT,
            'dateUpdated' => DbConst::CYCLES_TBL_DATEUPD,
            'createdBy' => DbConst::CYCLES_TBL_CRTBY,
            'updatedBy' => DbConst::CYCLES_TBL_UPDBY,
            'penCode' => DbConst::PENS_TBL_PENCODE,
            'locationName' => DbConst::LOCATIONS_TBL_LCTNAME,
            'firstName' => DbConst::TENANTS_TBL_FIRSTNAME,
            'lastName' => DbConst::TENANTS_TBL_LASTNAME,
            'statusName' => DbConst::STATUSES_TBL_STSNAME,
            'statusCode' => DbConst::STATUSES_TBL_STSCODE,
            'createdByUsername' => 'created_by_username',
        ];
    }
}