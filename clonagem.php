<?php

// Referência e clonagem de objetos

class Pessoa
{
  public $idade;
  // Este método mágico é inicializado quando utilizamos o clone
  public function __clone(){
    echo "Clonagem de objetos ";
  }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;
echo "<br>";
echo $pessoa2->idade;