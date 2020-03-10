<?php

namespace App\Classes;

class Microondas extends Eletrodomestico
{
    public int $potencia;

    public function definirPotencia(int $potencia): void
    {
        $this->potencia = $potencia;
    }
}