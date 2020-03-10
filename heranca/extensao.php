<?php

require_once "../autoload/autoload-psr4.php";

$obj = new App\Classes\Microondas;

$obj->titulo = "Geladeira";
$obj->preco = 900.00;
$obj->defineCodigoBarras('00111');

$obj->definirVoltagem(110);
$obj->definirPotencia(620);

$obj->mostrar();

var_dump($obj);