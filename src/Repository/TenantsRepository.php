<?php

namespace App\Repository;

use App\Entity\Tenants;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tenants|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tenants|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tenants[]    findAll()
 * @method Tenants[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TenantsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tenants::class);
    }

    // /**
    //  * @return Tenants[] Returns an array of Tenants objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tenants
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getAll(): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT t
            FROM App\Entity\Tenants t
            ORDER BY t.first_name ASC'
        );

        // returns an array of Product objects
        return $query->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
}
