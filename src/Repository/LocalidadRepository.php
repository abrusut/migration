<?php


namespace App\Repository;

use App\Entity\NexoEmpresa\Empresa;
use App\Entity\NexoEmpresa\Localidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class LocalidadRepository
 * @package App\Repository
 */
class LocalidadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Localidad::class);
    }
    
    /*
     * Devuelve la primer localidad que machea con el string localidad
     */
    public function findByLikeLocalidad(string $localidad)
    {
        $localidadResult = null;
        
        /** @var Localidad $localidades */
        $qb = $this->createQueryBuilder('l');
        $localidades = $qb->andWhere( $qb->expr()->like('l.lNomDis', ':localidad'))
            ->setParameter('localidad', $localidad)
            ->orderBy('l.id', 'ASC')
            ->getQuery()
            ->getResult();
        
        if($localidades &&  count($localidades)>0){
            $localidadResult = $localidades[0];
        }
        
        return $localidadResult;
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