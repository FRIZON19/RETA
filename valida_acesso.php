<?php
session_start();

// coletando os dados do formulário
$usuario = htmlspecialchars ($_POST["usuario"], ENT_QUOTES);
$senha = htmlspecialchars ($_POST["senha"], ENT_QUOTES);

// iniciando a conexão com o BD
$conexao = mysqli_connect("localhost", "root", "", "bd") or die (mysqli_connect_error());

$query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'");
$dados = mysqli_fetch_array($query);

if ($usuario == "" or $senha == ""){
echo "Preencha os Campos!!!";
exit;
}
// tratar o resultado da consulta
if ($dados["usuario"] == $usuario) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	echo "Usuário Validado!";
	// usuário validado encaminhar para pagina index.php
	
} else {
  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
  echo "Usuário incorreto!";
  // usuário incorreto encaminhar para a página de login
}
header('Location: inicia.php');
?>