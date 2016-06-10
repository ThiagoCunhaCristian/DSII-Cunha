<?php 
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
    * @ORM\Entity
    * @ORM\Table(name="autores")
**/
class Autor 
{
    /**
        * @ORM\Id
        * @ORM\GeneratedValue(strategy="AUTO")
    **/
    protected $id;
}