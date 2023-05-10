<?php
// Associação
// Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.

class Pedido
{

  public $numero;
  public $cliente;

}

class Cliente
{

  public $nome;
  public $endereco;

}

$cliente = new Cliente();
$cliente->nome = "Kauan Eguchi";
$cliente->endereco = "Rua xxxxxx, 1234";

$pedido = new Pedido();
$pedido->numero = 1;
$pedido->cliente = $cliente;

$dados = array(

  'numero' => $pedido->numero,
  'nome_cliente' => $pedido->cliente->nome,
  'endereco_cliente' => $pedido->cliente->endereco

);
echo "<pre>";
print_r($dados);