<?php

namespace App\Classes;

use App\Interfaces\Imprimivel;

class Produto implements Imprimivel
{
    public const NORMA = "1050";

    private string $titulo;

    public string $descricao = "Produtos em geral";

    private float $preco;

    protected string $codigoBarras;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function defineCodigoBarras(string $codigo): void
    {
        if (\strlen($codigo) > 2) {
            $this->codigoBarras = $codigo;
        }
        
    }

    private function acessaCodigoBarras(): string
    {
        return "<br>Código de barras do produto: " . $this->codigoBarras;
    }

    public function definePreco(float $preco): void
    {
        if ($preco > 0) {
            $this->preco = $preco;
        }
    }

    public function detalhes(): void
    {
        echo "<br>Nome do produto: " . $this->titulo . "<br>";
        echo "<br>Preço do produto: " . $this->preco . "<br>";
        echo "<br>Descrição do produto: " . $this->descricao . "<br>";
        echo $this->acessaCodigoBarras();
    }

    public function retornaDetalhes(): string
    {
        $saida = "<br>Nome do produto: " . $this->titulo . "<br>";
        $saida = $saida . "<br>Preço do produto: " . $this->preco . "<br>";
        $saida = $saida . "<br>Descrição do produto: " . $this->descricao . "<br>";
        $saida = $saida . $this->acessaCodigoBarras();

        return $saida;
    }
}