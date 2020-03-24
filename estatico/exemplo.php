<?php

require_once "../autoload/autoload-psr4.php";

use App\Classes\Vendedor;

echo Vendedor::comissao();

var_dump(Vendedor::$bonus);

Vendedor::$bonus = 1.5;

var_dump(Vendedor::$bonus);

