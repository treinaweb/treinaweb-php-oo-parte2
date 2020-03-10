<?php

require_once "../autoload/autoload-psr4.php";

$obj = new App\Classes\Eletrodomestico;

$obj->titulo = "Geladeira";
$obj->preco = 900.00;
$obj->defineCodigoBarras('00111');

$obj->definirVoltagem(110);

var_dump($obj);