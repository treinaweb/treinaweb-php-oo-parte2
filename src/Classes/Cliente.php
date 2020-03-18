<?php

namespace App\Classes;

use App\Traits\Imprimir;

class Cliente extends Pessoa
{
    use Imprimir;

    public function setId(int $id): void
    {
        $this->id = $id + 1000;
    }

    public function __set(string $nomePropriedade, $valorPropriedade): void
    {
        if ($nomePropriedade === 'cpf') {
            $this->cpf = \str_replace('.', '', $valorPropriedade);
        } else {
            $this->$nomePropriedade = $valorPropriedade;
        }
    }

    public function __get(string $nomePropriedade): string
    {
        return "A propriedade nao existe";
    }

    public function __call(string $nomeMetodo, array $argumentosMetodo): void
    {
        if  ($nomeMetodo === 'alterar') {
            $this->nome = $argumentosMetodo[0];
            $this->idade = $argumentosMetodo[1];
        }
    }

    public function __invoke(bool $status): void
    {
        $this->status = $status;
    }

    public function __sleep() : array
    {
        return ["nome", "idade"];
    }

    public function __wakeup(): void
    {
        $this->tipo = "serializado";
    }

    public function __tostring(): string
    {
        return $this->nome . ", " . $this->idade;
    }

    public function comprar(): void
    {
        echo "O cliente {$this->nome} realizou uma compra";
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function __destruct()
    {
        //echo "O obj foi destruido";
    }
}



