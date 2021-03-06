<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\DDC2372;

use Doctrine\Tests\Models\DDC2372\Traits\DDC2372AddressTrait;

/** @Entity @Table(name="users") */
class DDC2372User
{
    use DDC2372AddressTrait;

    /**
     * @var int
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     * @Column(type="string", length=50)
     */
    private $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
}
