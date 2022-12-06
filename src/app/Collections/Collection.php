<?php

namespace App\app\Collections;

use Iterator;

abstract class Collection
{
    protected array $items;

    protected int $count;

    public function getItems(): Iterator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    public abstract function toArray(): array;

    public abstract function setItems(array $items): Collection;
}