<?php

namespace AppBundle\Model\Tenant;

use AppBundle\Base\AbstractDTO;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOInterface;

class Tenant extends AbstractDTO implements DTOInterface
{
    private $tenantId;

    private $firstName;

    private $lastName;

    private $address;

    private $phoneNumber;

    private $emailAddress;

    private $statusId;

    private $dateCreated;

    private $dateUpdated;

    private $createdBy;

    private $updatedBy;

    private $statusName;

    private $statusCode;

    private $createdByUsername;

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function getStatusId()
    {
        return $this->statusId;
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

    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
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
            'tenantId' => $this->getTenantId(),
            'firstName' => $this->getFirstName(),
            'lastName' => $this->getLastName(),
            'address' => $this->getAddress(),
            'phoneNumber' => $this->getPhoneNumber(),
            'emailAddress' => $this->getEmailAddress(),
            'statusId' => $this->getStatusId(),
            'dateCreated' => $this->getDateCreated(),
            'dateUpdated' => $this->getDateUpdated(),
            'createdBy' => $this->getCreatedBy(),
            'updatedBy' => $this->getUpdatedBy(),
            'statusName' => $this->getStatusName(),
            'statusCode' => $this->getStatusCode(),
            'createdByUsername' => $this->getCreatedByUsername(),
        ];
    }

    public function getDtoToTableMap()
    {
        return [
            'tenantId' => DbConst::TENANTS_TBL_ID,
            'firstName' => DbConst::TENANTS_TBL_FIRSTNAME,
            'lastName' => DbConst::TENANTS_TBL_LASTNAME,
            'address' => DbConst::TENANTS_TBL_ADDRESS,
            'phoneNumber' => DbConst::TENANTS_TBL_PHONE,
            'emailAddress' => DbConst::TENANTS_TBL_EMAIL,
            'statusId' => DbConst::TENANTS_TBL_STSID,
            'dateCreated' => DbConst::TENANTS_TBL_DATECRT,
            'dateUpdated' => DbConst::TENANTS_TBL_DATEUPD,
            'createdBy' => DbConst::TENANTS_TBL_CRTBY,
            'updatedBy' => DbConst::TENANTS_TBL_UPDBY,
            'statusName' => DbConst::STATUSES_TBL_STSNAME,
            'statusCode' => DbConst::STATUSES_TBL_STSCODE,
            'createdByUsername' => 'created_by_username',
        ];
    }
}