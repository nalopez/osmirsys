<?php

namespace AppBundle\Model\User;

use AppBundle\Base\AbstractDTO;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DTOInterface;

class User extends AbstractDTO implements DTOInterface
{
    private $userId;

    private $username;

    private $password;

    private $salt;

    private $firstName;

    private $lastName;

    private $lastLogin;

    private $statusId;

    private $dateCreated;

    private $dateUpdated;

    private $createdBy;

    private $updatedBy;

    private $statusName;

    private $statusCode;

    public function getUserId()
    {
        return $this->userId;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getLastLogin()
    {
        return $this->lastLogin;
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

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
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

    public function getArr()
    {
        return [
            'userId' => $this->getUserId(),
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'salt' => $this->getSalt(),
            'firstName' => $this->getFirstName(),
            'lastName' => $this->getLastName(),
            'lastLogin' => $this->getLastLogin(),
            'statusId' => $this->getStatusId(),
            'dateCreated' => $this->getDateCreated(),
            'dateUpdated' => $this->getDateUpdated(),
            'createdBy' => $this->getCreatedBy(),
            'updatedBy' => $this->getUpdatedBy(),
            'statusName' => $this->getStatusName(),
            'statusCode' => $this->getStatusCode(),
        ];
    }

    public function getDtoToTableMap()
    {
        return [
            'userId' => DbConst::USERS_TBL_ID,
            'username' => DbConst::USERS_TBL_USERNAME,
            'password' => DbConst::USERS_TBL_PASSWORD,
            'salt' => DbConst::USERS_TBL_SALT,
            'firstName' => DbConst::USERS_TBL_FIRSTNAME,
            'lastName' => DbConst::USERS_TBL_LASTNAME,
            'lastLogin' => DbConst::USERS_TBL_LASTLOGIN,
            'statusId' => DbConst::USERS_TBL_STSID,
            'dateCreated' => DbConst::USERS_TBL_DATECRT,
            'dateUpdated' => DbConst::USERS_TBL_ID,
            'createdBy' => DbConst::USERS_TBL_DATEUPD,
            'updatedBy' => DbConst::USERS_TBL_UPDBY,
            'statusName' => DbConst::STATUSES_TBL_STSNAME,
            'statusCode' => DbConst::STATUSES_TBL_STSCODE,
        ];
    }
}