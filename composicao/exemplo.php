<?php

require_once "../autoload/autoload-psr4.php";

$cliente = new App\Classes\Cliente;
$cliente->setId(1);
$cliente->setNome("maria");
$cliente->setIdade(30);
$cliente->setTelefone("11555555555");
$cliente->setEndereco("Av Paulista");

$produto = new App\Classes\Produto("Cerveja");
$produto->defineCodigoBarras("001");
$produto->definePreco(5.20);

$pedido = new App\Classes\Pedido($cliente, $produto);

$pedido->pegarProduto()->detalhes();

var_dump($pedido);
