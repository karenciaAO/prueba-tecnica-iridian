<?php

namespace App\Repository;

use App\Entity\FormularioContacto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormularioContacto|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormularioContacto|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormularioContacto[]    findAll()
 * @method FormularioContacto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormularioContactoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormularioContacto::class);
    }

    // Métodos personalizados de consulta si es necesario
}
