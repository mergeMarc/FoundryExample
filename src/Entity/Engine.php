<?php

namespace App\Entity;

abstract class Engine
{
    /**
     * @param int $age
     * @param bool $wellMaintained
     */
    public function __construct(protected int $age, protected bool $wellMaintained)
    {
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return bool
     */
    public function isWellMaintained(): bool
    {
        return $this->wellMaintained;
    }
}