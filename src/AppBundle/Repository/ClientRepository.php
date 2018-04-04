<?php
namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
class ClientRepository extends EntityRepository
{
    
    public function listAction()
{
    $client = $this->getDoctrine()
        ->getRepository(Client::class)
        ->findAllOrderedByName();
}
}