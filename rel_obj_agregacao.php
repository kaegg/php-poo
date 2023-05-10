<?php 
// Agregação
// Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si própria.

class Produtos
{

  public $nome;
  public $valor;

  function __construct($nome, $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor; 
  }
  
}

class Carrinho
{

  public $produtos;
  public function adiciona(Produtos $produto){
    $this->produtos[] = $produto;
  }

  public function exibe(){
    foreach($this->produtos as $produto){
      echo $produto->nome . '<br>';
      echo $produto->valor . '<hr>';
    }
  }

}

$produto1 = new Produtos('Notebook', "3000");
$produto2 = new Produtos('Mouse', "250");
$produto3 = new Produtos('teclado', "325");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->exibe();
echo "<pre>";
print_r ($carrinho->produtos);