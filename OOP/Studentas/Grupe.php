<?php

class Grupe
{
    private int $id;
    private string $name;
    private int $trukme;

    public function __construct(string $name, int $trukme)
    {
        $this->name = $name;
        $this->trukme = $trukme;
    }

    public function gautiName(): string
    {
        return $this->name;
    }

    public function gautiTrukme(): int
    {
        return $this->trukme;
    }
}