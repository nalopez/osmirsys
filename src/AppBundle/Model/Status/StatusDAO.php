<?php

namespace AppBundle\Model\Status;

use Doctrine\DBAL\Driver\Connection;

use AppBundle\Base\AbstractDAO;
use AppBundle\Base\AbstractFilter;
use AppBundle\Constant\DatabaseConstant as DbConst;
use AppBundle\Interfaces\DAOInterface;
use AppBundle\Model\Status\Status;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;

class StatusDAO extends AbstractDAO implements DAOInterface
{
	public $dto;
	public $conn;

    public function __construct(Connection $conn, Status $dto)
    {
    	$this->conn = $conn;
        $this->dto = $dto;
    }

    public function getDataByFilter($dtoFilter, Pagination $pagination, Sorting $sorting, $oneResultArray)
    {
        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder
            ->select([
                DbConst::STATUSES_TBL_ID_A,
                DbConst::STATUSES_TBL_STSNAME_A,
                DbConst::STATUSES_TBL_STSCODE_A,
            ])
            ->from(DbConst::STATUSES_TBL_NAME, DbConst::STATUSES_TBL_ALIAS);

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
        return null;
    }

    public function update($dto)
    {
        return null;
    }

    public function delete($dto)
    {
        return null;
    }
}