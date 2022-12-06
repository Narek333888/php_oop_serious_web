<?php

namespace App\app\Entities\Animals;

use App\app\Entities\Animal;

class Cat extends Animal
{
    private string $type = 'cat';

    /**
     * @var string
     */
    private string $sound = 'Meow';

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