<?php

namespace App\app\Entities\Animals;

use App\app\Entities\Animal;

class Bird extends Animal
{
    /**
     * @var string
     */
    private string $type = 'bird';

    /**
     * @var string
     */
    private string $sound = 'Hoo';

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function makeNoise(): string
    {
        return $this->sound;
    }
}