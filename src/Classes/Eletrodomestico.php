<?php

namespace App\Classes;

class Eletrodomestico extends Produto
{
    public int $voltagem;

    public string $descricao = "Eletrodomestico em geral";

    public function __construct(string $titulo)
    {
        parent::__construct($titulo);
    }

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    protected function definirVoltagem(int $voltagem): void
    {
        if ($voltagem === 110 || $voltagem === 220) {
            $this->voltagem = $voltagem;
        }
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br>Voltagem: " . $this->voltagem . "<br>";
    }
}