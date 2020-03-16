<?php

require_once "../autoload/autoload-psr4.php";

$cliente = new App\Classes\Cliente;

$cliente->setId(1);
$cliente->setNome("Elton");
$cliente->setIdade(28);
$cliente->setEndereco("rua paulista");
$cliente->setTelefone('1122554444');

var_dump($cliente);