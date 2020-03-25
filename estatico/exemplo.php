<?php

require_once "../autoload/autoload-psr4.php";

use App\Classes\Vendedor;
use App\Classes\Representante;

$joao = new Vendedor;
$joao->addVenda(100_000);
$joao->addVenda(100_000);
echo $joao->minhaComissao();


// echo Vendedor::CalculaComissao(true, 100_000);
// echo "<br>";

// echo Representante::CalculaComissao(true, 100_000);


