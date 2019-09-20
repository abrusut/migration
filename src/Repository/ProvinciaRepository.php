<?php


namespace App\Repository;

use App\Entity\NexoEmpresa\Empresa;
use App\Entity\NexoEmpresa\Localidad;
use App\Entity\NexoEmpresa\Provincia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ProvinciaRepository
 * @package App\Repository
 */
class ProvinciaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Provincia::class);
    }
    
    /*
     * Devuelve la primer provincia que machea con el string provincia
     */
    public function findByLikeProvincia(string $provincia)
    {
        $provinciaResult = null;
        
        /** @var Provincia $provincias */
        $qb = $this->createQueryBuilder('p');
        $provincias = $qb->andWhere( $qb->expr()->like('p.nombre', ':nombre'))
            ->setParameter('nombre', $provincia)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();
        
        if($provincias &&  count($provincias)>0){
            $provinciaResult = $provincias[0];
        }
        
        return $provinciaResult;
    }
    
    
    /*
    public function findOneBySomeField($value): ?Comment
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}