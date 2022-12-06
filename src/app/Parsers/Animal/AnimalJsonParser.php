<?php

namespace App\app\Parsers\Animal;

class AnimalJsonParser
{
    public function parseJson(string $json): array
    {
        return json_decode($json);
    }
}