<?php

require_once "../autoload/autoload-psr4.php";

use App\Classes\Vendedor;
use App\Classes\Representante;



echo Vendedor::CalculaComissao(true, 100_000);
echo "<br>";

echo Representante::CalculaComissao(true, 100_000);


