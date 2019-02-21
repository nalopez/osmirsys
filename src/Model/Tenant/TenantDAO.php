<?php

namespace App\Model\Tenant;

use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use App\Model\Tenant\Tenant;

/**
* Account Entity/Definition
*/
class TenantDAO
{
    /**
     * Account DAO constructor
     *
     * @param \Connection   $conn       Database Connection.
     * @param \RedisWrapper $redisCache Redis Wrapper.
     */
    public function __construct(
        Connection $conn
    ) {
        $this->conn = $conn;
    }//end __construct()

    /**
     * This function will return all accounts data
     *
     * @param Pagination $pagination Pagination details
     * @param Sorting    $sorting    Sorting details.
     *
     * @return array
     */
    public function getAll()
    {
        /*$queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder
            ->select(
                'username'
            )
            ->from('users');

        $returnObj = $queryBuilder->execute();
        return $returnObj->fetchAll();*/

        $entityManager = $this->getDoctrine()->getManager();
        $tenant = $entityManager->getRepository(Tenant::class)->find(1);

        echo "<pre>";
        var_dump($tenant);
        echo "</pre>";
        

    }//end getAll()
}//end class
