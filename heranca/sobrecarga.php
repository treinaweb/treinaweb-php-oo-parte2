<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto;

$prod->titulo = "Cerveja";
$prod->preco = 3.00;
$prod->defineCodigoBarras('00111');

//$prod->detalhes();

$geladeira = new App\Classes\Eletrodomestico;

$geladeira->titulo = "Galadeira";
$geladeira->preco = 3000.00;
$geladeira->defineCodigoBarras('00112');
$geladeira->definirVoltagem(110);

//$geladeira->detalhes();

$microondas = new App\Classes\Microondas;

$microondas->titulo = "X200";
$microondas->preco = 300.00;
$microondas->defineCodigoBarras('00113');
$microondas->definirVoltagem(110);
$microondas->definirPotencia(700);

$microondas->detalhes();