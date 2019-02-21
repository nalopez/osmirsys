<?php

namespace App\Service;

use App\Model\Tenant\Tenants;
use App\Model\Tenant\TenantDAO;
use App\Model\Tenant\TenantsRepository;
use Doctrine\ORM\EntityManager; 
use Doctrine\ORM\EntityManagerInterface;

class TenantManager
{

    private $dto;
    private $dao;
    private $entityManager;

    public function __construct(
        Tenants $dto,
        TenantDAO $dao,
        EntityManagerInterface $entityManager
    ) {
        $this->dto = $dto;
        $this->dao = $dao;
        $this->entityManager = $entityManager;
    }//end __construct()

    public function getTenants()
    {
        
        
        $tenants = $this->entityManager
            ->getRepository(Tenants::class)
            ->getAll();

        echo "<pre>";
        var_dump($tenants);
        echo "</pre>";
        
    	
        /*return $this->dao->getAll();   */


    }
}