<?php

namespace AppBundle\Model\Cycle;

use Doctrine\DBAL\Driver\Connection;

use AppBundle\Base\AbstractDAO;
use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DAOInterface;
use AppBundle\Model\Cycle\Cycle;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;

class CycleDAO extends AbstractDAO implements DAOInterface
{
	public $dto;
	public $conn;

    public function __construct(Connection $conn, Cycle $dto)
    {
    	$this->conn = $conn;
        $this->dto = $dto;
    }

    public function getDataByFilter($dtoFilter, Pagination $pagination, Sorting $sorting, $oneResultArray)
    {
        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder
            ->select([
                DbConst::CYCLES_TBL_ID_A,
                DbConst::CYCLES_TBL_PENID_A,
                DbConst::CYCLES_TBL_TENTID_A,
                DbConst::CYCLES_TBL_CYLCNT_A,
                DbConst::CYCLES_TBL_HDCNT_A,
                DbConst::CYCLES_TBL_STSID_A,
                DbConst::CYCLES_TBL_STRTDATE_A,
                DbConst::CYCLES_TBL_ENDDATE_A,
                DbConst::CYCLES_TBL_DATECRT_A,
                DbConst::CYCLES_TBL_DATEUPD_A,
                DbConst::CYCLES_TBL_CRTBY_A,
                DbConst::CYCLES_TBL_UPDBY_A,
                DbConst::PENS_TBL_PENCODE_A,
                DbConst::LOCATIONS_TBL_LCTNAME_A,
                DbConst::TENANTS_TBL_FIRSTNAME_A,
                DbConst::TENANTS_TBL_LASTNAME_A,
                DbConst::STATUSES_TBL_STSNAME_A,
                DbConst::STATUSES_TBL_STSCODE_A,
                DbConst::USERS_TBL_USERNAME_A . ' as created_by_username',
            ])
            ->from(DbConst::CYCLES_TBL_NAME, DbConst::CYCLES_TBL_ALIAS)
            ->innerJoin(
                DbConst::CYCLES_TBL_ALIAS,
                DbConst::PENS_TBL_NAME,
                DbConst::PENS_TBL_ALIAS,
                DbConst::CYCLES_TBL_PENID_A . " = " . DbConst::PENS_TBL_ID_A
            )
            ->innerJoin(
                DbConst::PENS_TBL_ALIAS,
                DbConst::LOCATIONS_TBL_NAME,
                DbConst::LOCATIONS_TBL_ALIAS,
                DbConst::PENS_TBL_LOCID_A . " = " . DbConst::LOCATIONS_TBL_ID_A
            )
            ->innerJoin(
                DbConst::CYCLES_TBL_ALIAS,
                DbConst::TENANTS_TBL_NAME,
                DbConst::TENANTS_TBL_ALIAS,
                DbConst::CYCLES_TBL_TENTID_A . " = " . DbConst::TENANTS_TBL_ID_A
            )
            ->innerJoin(
                DbConst::CYCLES_TBL_ALIAS,
                DbConst::STATUSES_TBL_NAME,
                DbConst::STATUSES_TBL_ALIAS,
                DbConst::CYCLES_TBL_STSID_A . " = " . DbConst::STATUSES_TBL_ID_A
            )
            ->innerJoin(
                DbConst::CYCLES_TBL_ALIAS,
                DbConst::USERS_TBL_NAME,
                DbConst::USERS_TBL_ALIAS,
                DbConst::CYCLES_TBL_CRTBY_A . " = " . DbConst::USERS_TBL_ID_A
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
            ->insert(DbConst::CYCLES_TBL_NAME)
            ->values(
                array(
                    DbConst::CYCLES_TBL_PENID => '?',
                    DbConst::CYCLES_TBL_TENTID => '?',
                    DbConst::CYCLES_TBL_CYLCNT => '?',
                    DbConst::CYCLES_TBL_HDCNT => '?',
                    DbConst::CYCLES_TBL_STSID => '?',
                    DbConst::CYCLES_TBL_STRTDATE => '?',
                    DbConst::CYCLES_TBL_ENDDATE => '?',
                    DbConst::CYCLES_TBL_DATECRT => '?',
                    DbConst::CYCLES_TBL_CRTBY => '?',
                )
            );

        $queryBuilder
            ->setParameter(0, $dto->getPenId())
            ->setParameter(1, $dto->getTenantId())
            ->setParameter(2, $dto->getCycleCount())
            ->setParameter(3, $dto->getHeadCount())
            ->setParameter(4, $dto->getStatusId())
            ->setParameter(5, $dto->getStartDate())
            ->setParameter(6, $dto->getEndDate())
            ->setParameter(7, $dto->getDateCreated())
            ->setParameter(8, $dto->getCreatedBy());

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