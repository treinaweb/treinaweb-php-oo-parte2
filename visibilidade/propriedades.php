<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Cerveja");

$geladeira = new App\Classes\Eletrodomestico("geladeira", 110);

$geladeira->detalhes();

