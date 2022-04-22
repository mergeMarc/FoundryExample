<?php

namespace App\Entity;

class SavedCar
{
    private int $id;

    public function __construct(private RegisteredCar $registeredCar)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return RegisteredCar
     */
    public function getRegisteredCar(): RegisteredCar
    {
        return $this->registeredCar;
    }
}