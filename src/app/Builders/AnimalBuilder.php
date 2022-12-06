<?php

namespace App\app\Builders;

use App\app\Entities\Animal;
use App\app\Enums\Animals\AnimalEnum;

class AnimalBuilder
{
    /**
     * @var Animal
     */
    private Animal $animal;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->animal = AnimalEnum::from($type)->entity();
    }

    /**
     * @param int $age
     * @return $this
     */
    public function setAge(int $age): self
    {
        $this->animal->setAge($age);

        return $this;
    }

    /**
     * @return Animal
     */
    public function build(): Animal
    {
        return $this->animal;
    }
}