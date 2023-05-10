<?php

class Login
{

  private $email;
  private $senha;
  private $nome;

  public function __construct($email, $senha, $nome){
    $this->nome = $nome;
    $this->setEmail($email);
    $this->setSenha($senha);
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($e){
    $email_filtrado = filter_var($e, FILTER_SANITIZE_EMAIL);
    $this->email = $email_filtrado;
  }

  public function getSenha(){
    return $this->senha;
  }

  public function setSenha($e){
    $this->senha = $e;
  }

  public function getNome(){
    return $this->nome;
  }

  public function Logar(){
    if($this->email == "teste@teste.com" && $this->senha == "123456"){
      echo "Logado com sucesso!";
    }else{
      echo "Dados inválidos";
    }
  }

}

$logar = new Login("teste@teste.com", "123456", "Kauan Eguchi");
// $logar->setEmail("teste\|@teste.com");
// $logar->setSenha("123456");
// $logar->email = "teste@teste.com";
// $logar->senha = "1234567";
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getNome();
