<?php

namespace App\Classes;

use App\Traits\Imprimir;

class Pedido
{
    use Imprimir;

    private Cliente $cli;

    private Produto $prod;

    public function __construct(Cliente $cliente, Produto $produto)
    {       
        $this->cli = $cliente;
        $this->prod = $produto;
    }

    public function pegarProduto(): Produto
    {
        return $this->prod;
    }
}