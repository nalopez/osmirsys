<?php

namespace AppBundle\Manager;

use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use AppBundle\Constant\ApiConstant as ApiConst;
use AppBundle\Model\Status\Status;
use AppBundle\Model\Status\StatusDAO;
use AppBundle\Model\Status\StatusFilter;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;

class StatusManager 
{
	public $dto;
	public $dao;
	public $dtoFilter;
	public $pagination;
	public $sorting;

    public function __construct(
    	Status $dto,
    	StatusDAO $dao,
    	StatusFilter $dtoFilter,
    	Pagination $pagination,
    	Sorting $sorting
    ) {
    	$this->dto = $dto;
		$this->dao = $dao;
		$this->dtoFilter = $dtoFilter;
		$this->pagination = $pagination;
		$this->sorting = $sorting;
    }

    public function getStatusesByFilter($params)
    {
    	// Set filter values
    	$this->dtoFilter->setFilters($params);

		return $this->dao->getDataByFilter($this->dtoFilter, $this->pagination, $this->sorting);
    }
}