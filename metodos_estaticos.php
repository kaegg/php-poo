<?php

class Login
{

  public static $user;

  public static function verificaLogin(){
    echo "O usuário está logado!";
  }

  public static function mostraUsuario(){
    echo "O usuário logado é: " . self::$user;
  }

}

Login::$user = 'Admin';
Login::verificaLogin();
echo "<br>";
Login::mostraUsuario();
