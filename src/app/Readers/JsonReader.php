<?php

namespace App\app\Readers;

final class JsonReader
{
    private string $json;

    public function __construct(string $path)
    {
        $this->json = file_get_contents($path);
    }

    public function parse(): array
    {
        return json_decode($this->json);
    }
}