<?php

namespace App\Classes;

class Pessoa 
{
   private string $nome;
   
   private int $idade;
   
   private string $telefone;
    
   public function setNome($nome): void
   {
       $this->nome = $nome;
   }
   
   public function getNome(): string
   {
       return $this->nome;
   }
   
   public function setIdade($idade): void
   {
       $this->idade = $idade;
   }
   
   public function getIdade(): int
   {
       return $this->idade;
   }
   
   public function setTelefone($telefone): void
   {
       $this->telefone = $telefone;
   }
   
   public function getTelefone(): string
   {
       return $this->telefone;
   }
   
}
