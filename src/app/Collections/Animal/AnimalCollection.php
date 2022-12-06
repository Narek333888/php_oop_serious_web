<?php

namespace App\app\Collections\Animal;

use App\app\Builders\AnimalBuilder;
use App\app\Collections\Collection;
use App\app\Entities\Animal;
use App\app\Entities\Animals\Dog;

class AnimalCollection extends Collection
{
    public function setItems(array $items): Collection
    {
        $this->count = count($items);
        $this->items = array_map(function ($item) {
            if ($item instanceof Animal) {
                return $item;
            }

            return (new AnimalBuilder($item->type))->setAge($item->age)->build();
        }, $items);

        return $this;
    }

    public function toArray(): array
    {
        return array_map(function ($item) {
            return [
                'type' => $item->getType(),
                'age' => $item->getAge(),
                'sound' => $item->makeNoise(),
            ];
        }, $this->items);
    }

    public function random(): Animal
    {
        return $this->items[array_rand($this->items, 1)];
    }

    public function pluck(string $column): array
    {
        return array_map(
            function ($item) use ($column) {
                return $item[$column];
            }, $this->toArray());
    }

    public function filterByType(string $type): Collection
    {
        return (new self())->setItems(array_filter(
                $this->items,
                function ($item) use ($type) {
                    return $item->getType() === $type;
                })
        );
    }

    public function allAgeSum(): float
    {
        return array_sum($this->pluck('age'));
    }

    public function allAgeAverage(): float
    {
        return $this->allAgeSum() / $this->getCount();
    }

    public function dogsAgeAverage(): float
    {
        $dogs = $this->filterByType('dog');
        return array_sum($dogs->pluck('age')) / $dogs->getCount();
    }

    public function getRandomDog(): Dog
    {
        return $this->filterByType('dog')->random();
    }

    public function getRandomDogSound(): string
    {
        return $this->filterByType('dog')->random()->makeNoise();
    }
}