<?php

/* A classe Banco serve como modelo para as demais classes e não pode mais ser acessada como um objeto */
abstract class Banco
{

  protected $saldo;
  protected $limiteSaque;
  protected $juros;

  abstract protected function Sacar($s);

  abstract protected function Depositar($d);

  public function setSaldo($s){
    $this->saldo = $s;
  }

  public function getSaldo(){
    return $this->saldo;
  }

}

class Itau extends Banco
{

  public function Sacar($s){
    $this->saldo -= $s;
    echo " Sacou" . $s;
  }

  public function Depositar($d){
    $this->saldo += $d;
    echo " Depositou" . $d;
  }

}

// class Bradesco extends Banco
// {

//   public function Sacar(){
//     echo "sacou";
//   }

//   public function Depositar(){
//     echo "depositou";
//   }

// }

$itau = new Itau();
$itau->setSaldo(1500);
echo "<hr> Saldo:" . $itau->getSaldo();
$itau->Sacar(187);
echo "<hr> Saldo:" . $itau->getSaldo();
$itau->Depositar(135);
echo "<hr> Saldo:" . $itau->getSaldo();