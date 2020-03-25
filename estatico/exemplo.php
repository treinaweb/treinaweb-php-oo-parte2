<?php

require_once "../autoload/autoload-psr4.php";

use App\Classes\Vendedor;
use App\Classes\Representante;

echo Representante::comissao(false);

// var_dump(Vendedor::$bonus);

// Vendedor::$bonus = 1.5;

// echo Vendedor::CalculaComissao(true, 100_000);

// var_dump(Vendedor::$bonus);

