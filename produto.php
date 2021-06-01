<?php

htmlspecialchars($_POST["codigo"], ENT_QUOTES);

$codigo = htmlspecialchars ($_POST["codigo"], ENT_QUOTES);
$nome = htmlspecialchars ($_POST["nome"], ENT_QUOTES);
$fabricante = htmlspecialchars ($_POST["fabricante"], ENT_QUOTES);
$preço = htmlspecialchars ($_POST["preço"], ENT_QUOTES);      
$validade = htmlspecialchars ($_POST["validade"], ENT_QUOTES);
$estoque = htmlspecialchars ($_POST["estoque"], ENT_QUOTES);

$conexao = mysqli_connect("localhost", "root", "","bd") or die (mysqli_connect_error());
$query = mysqli_query($conexao, "INSERT INTO produto (codigo, nome, fabricante, preço, validade, estoque,)
                               VALUES ('$codigo', '$nome', '$fabricante', '$preço', '$validade', '$estoque')");
echo "Cadastro Concluido";
header('Location: CadastroP.php');
?>
 