<?php

namespace App\app\Entities\Animals;

use App\app\Entities\Animal;

class Dog extends Animal
{
    /**
     * @var string
     */
    private string $type = 'dog';

    /**
     * @var string
     */
    private string $sound = 'Woof';


    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function makeNoise(): string
    {
        return $this->sound;
    }
}