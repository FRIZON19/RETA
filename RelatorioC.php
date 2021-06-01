<?php
include("header.php");
 include("valida.php"); ?>

<center><h3> RELATORIO DE CLIENTES </h3></center>

<table class="table table-striped">

	<tr>
		<td>nome</td>
		<td>cnpj</td>
		<td>cpf</td>
		<td>telefone</td>
		<td>email</td>
        <td>endereço</td>
        <td>cidade</td>
	</tr>

	<?php

$conexao = mysqli_connect("localhost", "root", "", "bd") or die (mysqli_connect_error());
  
    $resultado = mysqli_query($conexao,"SELECT * FROM cliente");

    while ($dados = mysqli_fetch_array($resultado)) {
    	echo "<tr>";
    	echo "<td> $dados[nome] </td>";
    	echo "<td> $dados[cnpj] </td>";
    	echo "<td> $dados[cpf] </td>";
    	echo "<td> $dados[telefone] </td>";
    	echo "<td> $dados[email] </td>";
        echo "<td> $dados[endereço] </td>";
        echo "<td> $dados[cidade] </td>";
    	echo "</tr>";
    }

    ?>
</table>
<?php include("footer.php"); ?>