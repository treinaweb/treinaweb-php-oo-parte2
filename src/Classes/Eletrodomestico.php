<?php

namespace App\Classes;

class Eletrodomestico extends Produto
{
    public int $voltagem;

    public function definirVoltagem(int $voltagem): void
    {
        if ($voltagem === 110 || $voltagem === 220) {
            $this->voltagem = $voltagem;
        }
    }

    public function detalhes(): void
    {
        echo "Nome do produto: " . $this->titulo;
        echo " Voltagem: " . $this->voltagem;
    }
}