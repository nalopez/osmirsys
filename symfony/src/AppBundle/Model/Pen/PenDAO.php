<?php

namespace AppBundle\Model\Pen;

use Doctrine\DBAL\Driver\Connection;

use AppBundle\Base\AbstractDAO;
use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DAOInterface;
use AppBundle\Model\Pen\Pen;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;

class PenDAO extends AbstractDAO implements DAOInterface
{
	public $dto;
	public $conn;

    public function __construct(Connection $conn, Pen $dto)
    {
    	$this->conn = $conn;
        $this->dto = $dto;
    }

    public function getDataByFilter($dtoFilter, Pagination $pagination, Sorting $sorting, $oneResultArray)
    {
        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder
            ->select([
                DbConst::PENS_TBL_ID_A,
                DbConst::PENS_TBL_PENCODE_A,
                DbConst::PENS_TBL_DESC_A,
                DbConst::PENS_TBL_LOCID_A,
                DbConst::PENS_TBL_CAP_A,
                DbConst::PENS_TBL_DATECRT_A,
                DbConst::PENS_TBL_DATEUPD_A,
                DbConst::PENS_TBL_CRTBY_A,
                DbConst::PENS_TBL_UPDBY_A,
                DbConst::LOCATIONS_TBL_LCTNAME_A,
                DbConst::LOCATIONS_TBL_LCTCODE_A,
                DbConst::USERS_TBL_ID_A . ' as created_by_username',
            ])
            ->from(DbConst::PENS_TBL_NAME, DbConst::PENS_TBL_ALIAS)
            ->innerJoin(
                DbConst::PENS_TBL_ALIAS,
                DbConst::LOCATIONS_TBL_NAME,
                DbConst::LOCATIONS_TBL_ALIAS,
                DbConst::PENS_TBL_LOCID_A . " = " . DbConst::LOCATIONS_TBL_ID_A
            )
            ->innerJoin(
                DbConst::PENS_TBL_ALIAS,
                DbConst::USERS_TBL_NAME,
                DbConst::USERS_TBL_ALIAS,
                DbConst::PENS_TBL_CRTBY_A . " = " . DbConst::USERS_TBL_ID_A
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
            ->insert(DbConst::USERS_TBL_NAME)
            ->values(
                array(
                    DbConst::USERS_TBL_USERNAME => '?',
                    DbConst::USERS_TBL_PASSWORD => '?',
                    DbConst::USERS_TBL_SALT => '?',
                    DbConst::USERS_TBL_FIRSTNAME => '?',
                    DbConst::USERS_TBL_LASTNAME => '?',
                    DbConst::USERS_TBL_STSID => '?',
                    DbConst::USERS_TBL_DATECRT => '?',
                    DbConst::USERS_TBL_CRTBY => '?',
                )
            );

        $queryBuilder
            ->setParameter(0, $dto->getUsername())
            ->setParameter(1, $dto->getPassword())
            ->setParameter(2, $dto->getSalt())
            ->setParameter(3, $dto->getFirstName())
            ->setParameter(4, $dto->getLastName())
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