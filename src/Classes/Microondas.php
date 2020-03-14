<?php

namespace App\Classes;

final class Microondas extends Eletrodomestico
{
    private int $potencia;

    public string $descricao = "Microondas em geral";

    public function __construct(string $titulo, int $voltagem, int $potencia)
    {
        parent::__construct($titulo);
        $this->definirVoltagem($voltagem);
        $this->definirPotencia($potencia);
    }

    final public function defineCodigoBarras(string $codigo): void
    {
        if (\strlen($codigo) > 4) {
            $this->codigoBarras = $codigo;
        }
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