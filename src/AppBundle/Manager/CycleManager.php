<?php

namespace AppBundle\Manager;

use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use AppBundle\Constant\ApiConstant as ApiConst;
use AppBundle\Manager\CycleManager;
use AppBundle\Manager\StatusManager;
use AppBundle\Model\Cycle\Cycle;
use AppBundle\Model\Cycle\CycleDAO;
use AppBundle\Model\Cycle\CycleFilter;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;
use AppBundle\Util\Helper\SecurityHelperTrait;

class CycleManager 
{
    use SecurityHelperTrait;

    public $dto;
    public $dao;
    public $dtoFilter;
    public $statusManager;
    public $pagination;
    public $sorting;

    public function __construct(
        Cycle $dto,
        CycleDAO $dao,
        CycleFilter $dtoFilter,
        StatusManager $statusManager,
        Pagination $pagination,
        Sorting $sorting
    ) {
        $this->dto = $dto;
        $this->dao = $dao;
        $this->dtoFilter = $dtoFilter;
        $this->statusManager = $statusManager;
        $this->pagination = $pagination;
        $this->sorting = $sorting;
    }

    public function getCyclesByFilter($params, $oneResultArray = false)
    {
        // Set filter values
        $this->dtoFilter->setFilters($params);

        return $this->dao->getDataByFilter($this->dtoFilter, $this->pagination, $this->sorting, $oneResultArray);
    }

    public function addCycle($params)
    {
        // Get status ID for active
        $statusDetails = $this->statusManager->getStatusesByFilter([
            'statusCode' => ApiConst::STATUS_INACTIVE,
        ]);

        if (empty($statusDetails)) {
            // Log error here
            return false;
        }

        // Generate add parameters
        $params['statusId'] = $statusDetails->getStatusId();
        $params['dateCreated'] = date(ApiConst::DATE_TIME_YMDHIS);

        $this->dto->setValues($params);

        return $this->dao->insert($this->dto);
    }
}