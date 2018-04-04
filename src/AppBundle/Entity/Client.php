<?php

namespace AppBundle\Entity; // Symfony utilizará esta ruta para inyectar la clase desde donde se le llame. Digamos que es la ruta para que la aplicación entienda la estructura, ya lo verás en siguientes clases que vayas creando.

use Doctrine\ORM\Mapping as ORM; // Esta clase de Doctrine se utiliza para mapear las entidades, de manera que automáticamente cree/actualice las tablas y trabaje con ellas

/**
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    
    /**
     * @param string
     *
     * @return Client
     */
    public function setName(string $name)
    {
        $this->name = $name;
        
        return $this;
    }
     /**
     * @param integer
     *
     * @return Client
     */
    public function setTelefono(integer $telefono)
    {
        $this->telefono = $telefono;
        
        return $this;
    }
}