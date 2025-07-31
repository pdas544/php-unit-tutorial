<?php

namespace App;
class Queue
{
    private array $items;
    public function __construct()
    {
        $this->items = [];
    }
    public function enqueue(mixed $value): void
    {
        $this->items[] = $value;
    }
    public function dequeue(): string
    {
        if($this->isEmpty()){
            throw new \UnderFlowException('Queue is empty');
        }
        return array_shift($this->items);
    }
    public function isEmpty(): bool{
        return empty($this->items);
    }
    public function getSize(): int{
        return count($this->items);
    }
}