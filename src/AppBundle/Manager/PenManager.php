<?php

namespace AppBundle\Manager;

use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use AppBundle\Constant\ApiConstant as ApiConst;
use AppBundle\Model\Pen\Pen;
use AppBundle\Model\Pen\PenDAO;
use AppBundle\Model\Pen\PenFilter;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;
use AppBundle\Util\Helper\SecurityHelperTrait;

class PenManager 
{
    use SecurityHelperTrait;

    public $dto;
    public $dao;
    public $dtoFilter;
    public $statusManager;
    public $pagination;
    public $sorting;

    public function __construct(
        Pen $dto,
        PenDAO $dao,
        PenFilter $dtoFilter,
        Pagination $pagination,
        Sorting $sorting
    ) {
        $this->dto = $dto;
        $this->dao = $dao;
        $this->dtoFilter = $dtoFilter;
        $this->pagination = $pagination;
        $this->sorting = $sorting;
    }

    public function getPensByFilter($params, $oneResultArray = false)
    {
        // Set filter values
        $this->dtoFilter->setFilters($params);

        return $this->dao->getDataByFilter($this->dtoFilter, $this->pagination, $this->sorting, $oneResultArray);
    }
}