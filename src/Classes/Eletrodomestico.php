<?php

namespace App\Classes;

class Eletrodomestico extends Produto
{
    public int $voltagem;

    public string $descricao = "Eletrodomestico em geral";

    public function __construct(string $titulo, int $voltagem)
    {
        parent::__construct($titulo);
        $this->definirVoltagem($voltagem);
    }

    public function definePreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function definirVoltagem(int $voltagem): void
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