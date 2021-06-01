<?php  
session_start();
// se a sessão está vazia é redirecionado para a página de login
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  // redireciona para o login
  header('Location: login.php');
} 

?>