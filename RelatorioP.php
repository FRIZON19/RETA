<?php
include("header.php"); ?>
 

<center><h3> RELATORIO DE PRODUTOS </h3></center>

<table class="table table-striped">

	<tr>
		<td>cod</td>
		<td>nome</td>
		<td>fabricante</td>
		<td>preço</td>
		<td>validade</td>
		<td>estoque</td>
	</tr>

	<?php
$conexao = mysqli_connect("localhost", "root", "", "bd") or die (mysqli_connect_error());
  
$resultado = mysqli_query($conexao,"SELECT * FROM produto");

while ($dados = mysqli_fetch_array($resultado)) {
    	echo "<tr>";
    	echo "<td> $dados[codigo] </td>";
    	echo "<td> $dados[nome] </td>";
    	echo "<td> $dados[fabricante] </td>";
    	echo "<td> $dados[preço] </td>";
    	echo "<td> $dados[validade] </td>";
    	echo "<td> $dados[estoque] </td>";
    	echo "</tr>";
    }
    ?>
</table>
<?php include("footer.php"); ?>