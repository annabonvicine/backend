<?php
//aqui é pra autenticar a sessão do usuario 
session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
  header('Location: entrar.php?login=erro2');
}