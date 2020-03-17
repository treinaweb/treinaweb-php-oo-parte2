<?php

namespace App\Email;

use App\Classes\Cliente;
use App\Email\Adaptadores\Mailgun\Adaptador as Mailgun;
use App\Email\Adaptadores\SES\Adaptador as SES;
use App\Email\Adaptadores\AdaptadorBase;

const VERSAO = 1.0;

class Envio 
{
    public function enviar(AdaptadorBase $adaptador): void
    {
        $adaptador->processar();

    }

    public function m1()
    {
        $adaptador = new Mailgun;
    }

    public function m2()
    {
        $adaptador = new SES;
    }
}

function validar(string $email): void
{
    echo "O endereco $email e valido";
}