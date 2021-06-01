<?php 

// coletando dados do formulário
$nome = htmlspecialchars($_POST["nome"], ENT_QUOTES);
$cpf = htmlspecialchars($_POST["cpf"], ENT_QUOTES);
$telefone = htmlspecialchars($_POST["telefone"], ENT_QUOTES);
$email = htmlspecialchars($_POST["email"], ENT_QUOTES);
$endereço = htmlspecialchars($_POST["endereço"], ENT_QUOTES);
$cidade = htmlspecialchars($_POST["cidade"], ENT_QUOTES);

$conexao = mysqli_connect("localhost", "root", "", "bd") or die (mysqli_connect_error());
$query = mysqli_query($conexao, "INSERT INTO cliente (nome, cpf, telefone, email, endereço, cidade)
VALUES ( '$nome', '$cpf', '$telefone', '$email', '$endereço', '$cidade')");
echo "Cadastro efetuado";

header('Location: CadastroC.php');
   ?>

      