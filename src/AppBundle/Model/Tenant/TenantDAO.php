<?php

namespace AppBundle\Model\Tenant;

use Doctrine\DBAL\Driver\Connection;

use AppBundle\Base\AbstractDAO;
use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DAOInterface;
use AppBundle\Model\Tenant\Tenant;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;

class TenantDAO extends AbstractDAO implements DAOInterface
{
	public $dto;
	public $conn;

    public function __construct(Connection $conn, Tenant $dto)
    {
    	$this->conn = $conn;
        $this->dto = $dto;
    }

    public function getDataByFilter($dtoFilter, Pagination $pagination, Sorting $sorting, $oneResultArray)
    {
        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder
            ->select([
                DbConst::TENANTS_TBL_ID_A,
                DbConst::TENANTS_TBL_FIRSTNAME_A,
                DbConst::TENANTS_TBL_LASTNAME_A,
                DbConst::TENANTS_TBL_ADDRESS_A,
                DbConst::TENANTS_TBL_PHONE_A,
                DbConst::TENANTS_TBL_EMAIL_A,
                DbConst::TENANTS_TBL_STSID_A,
                DbConst::TENANTS_TBL_DATECRT_A,
                DbConst::TENANTS_TBL_DATEUPD_A,
                DbConst::TENANTS_TBL_CRTBY_A,
                DbConst::TENANTS_TBL_UPDBY_A,
                DbConst::STATUSES_TBL_STSNAME_A,
                DbConst::STATUSES_TBL_STSCODE_A,
                DbConst::USERS_TBL_USERNAME_A . ' as created_by_username',
            ])
            ->from(DbConst::TENANTS_TBL_NAME, DbConst::TENANTS_TBL_ALIAS)
            ->innerJoin(
                DbConst::TENANTS_TBL_ALIAS,
                DbConst::STATUSES_TBL_NAME,
                DbConst::STATUSES_TBL_ALIAS,
                DbConst::TENANTS_TBL_STSID_A . " = " . DbConst::STATUSES_TBL_ID_A
            )
            ->innerJoin(
                DbConst::TENANTS_TBL_ALIAS,
                DbConst::USERS_TBL_NAME,
                DbConst::USERS_TBL_ALIAS,
                DbConst::TENANTS_TBL_CRTBY_A . " = " . DbConst::USERS_TBL_ID_A
            );

        $this->generateWhereSetParamClause($queryBuilder, $dtoFilter, $dtoFilter->getFilterToTableMap());

        $resultObj = $queryBuilder->execute();
        if (!$resultObj) {
            return false;
        }
        $returnObj = $resultObj->fetchAll();

        return $this->createDtoCollection($returnObj, $this->dto, $oneResultArray);
    }

    public function insert($dto)
    {
        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder
            ->insert(DbConst::TENANTS_TBL_NAME)
            ->values(
                array(
                    DbConst::TENANTS_TBL_FIRSTNAME => '?',
                    DbConst::TENANTS_TBL_LASTNAME => '?',
                    DbConst::TENANTS_TBL_ADDRESS => '?',
                    DbConst::TENANTS_TBL_PHONE => '?',
                    DbConst::TENANTS_TBL_EMAIL => '?',
                    DbConst::TENANTS_TBL_STSID => '?',
                    DbConst::TENANTS_TBL_DATECRT => '?',
                    DbConst::TENANTS_TBL_CRTBY => '?',
                )
            );

        $queryBuilder
            ->setParameter(0, $dto->getFirstName())
            ->setParameter(1, $dto->getLastName())
            ->setParameter(2, $dto->getAddress())
            ->setParameter(3, $dto->getPhoneNumber())
            ->setParameter(4, $dto->getEmailAddress())
            ->setParameter(5, $dto->getStatusId())
            ->setParameter(6, $dto->getDateCreated())
            ->setParameter(7, $dto->getCreatedBy());

        $result = $queryBuilder->execute();
        if ($result) {
            return $this->conn->lastInsertId();
        }

        return false;
    }

    public function update($dto)
    {
        $whereArr = [
            'userId',
        ];

        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder
            ->update(DbConst::USERS_TBL_NAME, DbConst::USERS_TBL_ALIAS);
        
        $this->generateUpdateClause($queryBuilder, $dto, $whereArr);
        $resultObj = $queryBuilder->execute();

        return true;
    }

    public function delete($dto)
    {
        return null;
    }
}