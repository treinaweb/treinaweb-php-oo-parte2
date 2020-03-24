<?php

namespace App\Classes;

class Vendedor
{
    static public float $bonus = 1.2;

    static public float $comissao = 2.5;

    static public function comissao(bool $temBonus): float
    {
        if ($temBonus) {
            return self::$comissao * self::$bonus;
        }

        return self::$comissao;
    }

    static public function calculaComissao(bool $temBonus, float $valor): float
    {
        $porcentageComissao = self::comissao($temBonus) / 100;

        return $porcentageComissao * $valor;
    }
}