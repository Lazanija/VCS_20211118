<?php

class Person
{
    public string $vardas;
    public string $pavarde;
    public int $asmensKodas;

    public function __construct() {
        $this->asmensKodas = random_int(1, 5);
    }
}