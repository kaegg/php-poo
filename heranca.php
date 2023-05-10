<?php
/* Herança é um recurso que permite que classses compartilhem atributos e métodos afim de reaproveitar códigos ou comportamentos generalizados */

// Geralmente a classe pai fica em um arquivo separado
class Veiculo
{

  public $modelo;
  public $cor;
  public $ano;

  public function Andar(){
    echo "Andou!!";
  }

  public function Parar(){
    echo "Parou!!";
  }

}

class Carro extends Veiculo
{
  
  public function ligarLimpador(){
    echo "Ligou o limpador de parabrisa";
  }

}

class Moto extends Veiculo
{

}

$moto = new Moto();
$moto->modelo = "biz";
$moto->cor = "vermelho";
// echo $moto->modelo;
// echo "<br>";
// echo $moto->cor;
// echo "<br>";
$moto->Andar();
// echo "<br>";
$moto->Parar();
// echo "<br>";
echo "<pre>";
print_r($moto);

$carro = new Carro();
$carro->modelo = "HB20";
$carro->cor = "Branco";
// echo $carro->modelo;
// echo "<br>";
// echo $carro->cor;
// echo "<br>";
$carro->Andar();
// echo "<br>";
$carro->Parar();
$carro->ligarLimpador();
// echo "<br>";
print_r($carro);