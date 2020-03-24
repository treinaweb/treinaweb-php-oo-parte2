<?php

namespace App\Classes;

class Vendedor
{
    static public float $bonus = 1.2;

    static public function comissao(): float
    {
        return 2.5;
    }
}