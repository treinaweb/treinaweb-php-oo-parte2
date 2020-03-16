<?php

namespace App\Classes;

abstract class Pessoa 
{
   private string $nome;
   
   private int $idade;

   public string $endereco;
   
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

   public function setEndereco($endereco): void
   {
       $this->endereco = $endereco;
   }
   
   public function getEndereco(): string
   {
       return $this->endereco;
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
