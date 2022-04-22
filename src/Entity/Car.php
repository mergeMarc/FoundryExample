<?php

namespace App\Entity;

class Car
{
    public function __construct(private string $name, private IcEngine $icEngine, private int $seats)
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return IcEngine
     */
    public function getIcEngine(): IcEngine
    {
        return $this->icEngine;
    }

    /**
     * @return int
     */
    public function getSeats(): int
    {
        return $this->seats;
    }
}