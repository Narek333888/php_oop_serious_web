<?php

namespace App\app\Facades\Animal;

use App\app\Collections\Animal\AnimalCollection;
use App\app\Collections\Collection;
use App\app\Parsers\Animal\AnimalJsonParser;
use App\app\Readers\JsonReader;

class AnimalFacade
{
    private AnimalCollection $collection;


    public function __construct()
    {
        $this->collection = new AnimalCollection();

    }

    public function getAnimals(string $path): AnimalCollection
    {
        $animals = (new JsonReader($path))->parse();
        return $this->collection->setItems($animals);
    }
}