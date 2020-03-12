<?php

namespace App\Classes;

final class Microondas extends Eletrodomestico
{
    public int $potencia;

    public string $descricao = "Microondas em geral";

    public function __construct(string $titulo, int $voltagem, int $potencia)
    {
        parent::__construct($titulo, $voltagem);
        $this->definirPotencia($potencia);
    }

    final public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function definirPotencia(int $potencia): void
    {
        $this->potencia = $potencia;
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br>Potencia: " . $this->potencia . "<br>";
    }


}