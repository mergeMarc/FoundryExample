<?php

namespace App\Entity;

class IcEngine extends Engine
{
    public function __construct(private int $cylinders, int $age, bool $wellMaintained)
    {
        parent::__construct($age, $wellMaintained);
    }

    /**
     * @return int
     */
    public function getCylinders(): int
    {
        return $this->cylinders;
    }
}