<?php

namespace App\Repository;

use App\Entity\Config;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\ORMException;

/**
 * @extends ServiceEntityRepository<Config>
 *
 * @method Config|null find($id, $lockMode = null, $lockVersion = null)
 * @method Config|null findOneBy(array $criteria, array $orderBy = null)
 * @method Config[]    findAll()
 * @method Config[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConfigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Config::class);
    }

    /**
     * Add or update a Config entity and optionally flush.
     *
     * @param Config $config The Config entity to persist.
     * @param bool $flush Whether to flush the changes immediately.
     */
    public function add(Config $config, bool $flush = false): void
    {
        try {
            $this->_em->persist($config);
            if ($flush) {
                $this->_em->flush();
            }
        } catch (ORMException $e) {
            // Handle exception (e.g., log it)
            // throw $e; // Re-throw if necessary
        }
    }

    // You can add custom repository methods here if needed
}
