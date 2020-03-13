<?php

namespace App\Classes;

class Produto 
{
    public const NORMA = "1050";

    private string $titulo;

    public string $descricao = "Produtos em geral";

    protected float $preco;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    private function acessaCodigoBarras(): void
    {
        echo "<br>Código de barras do produto: " . $this->codigoBarras;
    }

    public function definePreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function detalhes(): void
    {
        echo "<br>Nome do produto: " . $this->titulo . "<br>";
        echo "<br>Preço do produto: " . $this->preco . "<br>";
        echo "<br>Descrição do produto: " . $this->descricao . "<br>";
        $this->acessaCodigoBarras();
    }
}