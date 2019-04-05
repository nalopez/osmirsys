<?php

namespace AppBundle\Manager;

use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use AppBundle\Constant\ApiConstant as ApiConst;
use AppBundle\Manager\CycleManager;
use AppBundle\Manager\StatusManager;
use AppBundle\Model\Tenant\Tenant;
use AppBundle\Model\Tenant\TenantDAO;
use AppBundle\Model\Tenant\TenantFilter;
use AppBundle\Util\Helper\Pagination;
use AppBundle\Util\Helper\Sorting;
use AppBundle\Util\Helper\SecurityHelperTrait;

class TenantManager 
{
    use SecurityHelperTrait;

    public $dto;
    public $dao;
    public $dtoFilter;
    public $statusManager;
    public $pagination;
    public $sorting;

    public function __construct(
        Tenant $dto,
        TenantDAO $dao,
        TenantFilter $dtoFilter,
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

    public function getTenantsByFilter($params, $oneResultArray = false)
    {
        // Set filter values
        $this->dtoFilter->setFilters($params);

        return $this->dao->getDataByFilter($this->dtoFilter, $this->pagination, $this->sorting, $oneResultArray);
    }

    public function addTenant($params)
    {
        // Get status ID for active
        $statusDetails = $this->statusManager->getStatusesByFilter([
            'statusCode' => ApiConst::STATUS_ACTIVE,
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

    /*public function updateUser($params)
    {
        // Get existing detail for user
        $userDto = $this->getUsersByFilter([
            'userId' => $params['userId'],
        ]);

        if (empty($userDto)) {
            // Log error here
            return false;
        }

        $params['firstName'] = empty($params['firstName']) ? $userDto->getFirstName() : $params['firstName'];
        $params['lastName'] = empty($params['lastName']) ? $userDto->getLastName() : $params['lastName'];
        $params['statusId'] = empty($params['statusId']) ? $userDto->getStatusId() : $params['statusId'];
        $params['password'] = empty($params['password']) ? $userDto->getPassword() : $this->hashPassword($params['password'], $userDto->getSalt());
        $params['dateUpdated'] = date(ApiConst::DATE_TIME_YMDHIS);

        $this->dto->setValues($params);

        return $this->dao->update($this->dto);
    }*/

    public function computeTenantStatistics($tenant, $cycles)
    {
        // TODO:
        // Compute YOS and PCP values here.

        return $tenant;
    }
}