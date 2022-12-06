<?php

namespace App\app\Enums\Animals;

use App\app\Entities\Animal;
use App\app\Entities\Animals\Bird;
use App\app\Entities\Animals\Cat;
use App\app\Entities\Animals\Dog;

enum AnimalEnum: string
{
    case DOG = 'dog';
    case CAT = 'cat';
    case BIRD = 'bird';

    public function entity(): Animal
    {
        return match ($this) {
            self::DOG => new Dog(),
            self::CAT => new Cat(),
            self::BIRD => new Bird(),
        };
    }
}
