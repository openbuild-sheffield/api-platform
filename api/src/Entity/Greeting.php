<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource
 * @ORM\Entity
 */
class Greeting
{

    use EntityIdTrait;

    /**
     * @var string A warm greeting
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name = '';

    public function setName($name)
    {
        $this->name = $name;
    }

}
