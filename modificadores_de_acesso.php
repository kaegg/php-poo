<?php
/* 
  Public -> Você consegue acessar de qualquer lugar
  Private -> Você consegue acessar apenas dentro do escopo
  Protected -> Voê consegue acessar dentro do escopo da própria classe e da classe herdeira
*/

class Veiculo
{

  public $modelo;
  public $cor;
  public $ano;

  protected function Andar(){
    echo "Andou!";
  }

  public function Parar(){
    echo "Parou!";
  }

}

class Carro extends Veiculo
{
  
  public function limpaVidros(){
    echo "Limpando em 3, 2 ,1";
  }

  public function mostrarAcao(){
    $this->Andar();
  }

}

$carro = new Carro();
$carro->mostrarAcao();