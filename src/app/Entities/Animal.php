<?php

namespace App\app\Entities;

abstract class Animal
{
    /**
     * @var int
     */
    protected int $age;

    /**
     * @return string
     */
    public abstract function makeNoise(): string;

    /**
     * @param int $age
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}