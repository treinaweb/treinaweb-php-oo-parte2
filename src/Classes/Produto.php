<?php

namespace App\Classes;

class Produto 
{
    public const NORMA = "1050";

    private string $titulo;

    public string $descricao = "Produtos em geral";

    public float $preco;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras(): void
    {
        echo "<br>" . $this->codigoBarras;
    }

    public function detalhes(): void
    {
        echo "<br>Nome do produto: " . $this->titulo . "<br>";
    }
}