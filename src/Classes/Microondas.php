<?php

namespace App\Classes;

class Microondas extends Eletrodomestico
{
    public int $potencia;

    public function definirPotencia(int $potencia): void
    {
        $this->potencia = $potencia;
    }

    public function mostrar(): void
    {
        $this->detalhes();
        echo " Potencia: " . $this->potencia;
    }
}