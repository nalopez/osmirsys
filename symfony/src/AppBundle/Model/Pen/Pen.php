<?php

namespace AppBundle\Model\Pen;

use AppBundle\Base\AbstractDTO;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOInterface;

class Pen extends AbstractDTO implements DTOInterface
{
    private $penId;

    private $penCode;

    private $description;

    private $locationId;

    private $capacity;

    private $dateCreated;

    private $dateUpdated;

    private $createdBy;

    private $updatedBy;

    private $locationName;

    private $locationCode;

    private $createdByUsername;

    public function getPenId()
    {
        return $this->penId;
    }

    public function getPenCode()
    {
        return $this->penCode;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getLocationId()
    {
        return $this->locationId;
    }

    public function getCapacity()
    {
        return $this->capacity;
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

    public function getLocationName()
    {
        return $this->locationName;
    }

    public function getLocationCode()
    {
        return $this->locationCode;
    }

    public function getCreatedByUsername()
    {
        return $this->createdByUsername;
    }

    public function setPenId($penId)
    {
        $this->penId = $penId;
    }

    public function setPenCode($penCode)
    {
        $this->penCode = $penCode;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
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

    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
    }

    public function setCreatedByUsername($createdByUsername)
    {
        $this->createdByUsername = $createdByUsername;
    }

    public function getArr()
    {
        return [
            'penId' => $this->getPenId(),
            'penCode' => $this->getPenCode(),
            'description' => $this->getDescription(),
            'locationId' => $this->getLocationId(),
            'capacity' => $this->getCapacity(),
            'dateCreated' => $this->getDateCreated(),
            'dateUpdated' => $this->getDateUpdated(),
            'createdBy' => $this->getCreatedBy(),
            'updatedBy' => $this->getUpdatedBy(),
            'locationName' => $this->getLocationName(),
            'locationCode' => $this->getLocationCode(),
            'createdByUsername' => $this->getCreatedByUsername(),
        ];
    }

    public function getDtoToTableMap()
    {
        return [
            'penId' => DbConst::PENS_TBL_ID,
            'penCode' => DbConst::PENS_TBL_PENCODE,
            'description' => DbConst::PENS_TBL_DESC,
            'locationId' => DbConst::PENS_TBL_LOCID,
            'capacity' => DbConst::PENS_TBL_CAP,
            'dateCreated' => DbConst::PENS_TBL_DATECRT,
            'dateUpdated' => DbConst::PENS_TBL_DATEUPD,
            'createdBy' => DbConst::PENS_TBL_CRTBY,
            'updatedBy' => DbConst::PENS_TBL_UPDBY,
            'locationName' => DbConst::LOCATIONS_TBL_LCTNAME,
            'locationCode' => DbConst::LOCATIONS_TBL_LCTCODE,
            'createdByUsername' => 'created_by_username',
        ];
    }
}