<?php
include("header.php");
include("valida.php"); ?>

  <title>Cadastro Produtos</title>
<h1>CADASTRO DE PRODUTO</h1>
		<form method="POST" action="produto.php">

			<div class="form-group row">
			<div class="col-sm-1"><label">codigo: </label"></div>	
			<div class="col-sm-2"><input class="form-control" type="text"name="codigo"></div>
			<div class="col-sm-1"><label">nome: </label"></div>
			<div class="col-sm-2"><input class="form-control" type="text"name="nome"></div>
			<div class="col-sm-1"><label">fabricante: </label"></div>
			<div class="col-sm-2"><input class="form-control" type="text"name="fabricante"></div>
			</div>

			<div class="form-group row">
			<div class="col-sm-1"><label">preço: </label"></div>	
			<div class="col-sm-2"><input class="form-control" type="text"name="preço"></div>
			<div class="col-sm-1"><label">validade: </label"></div>
			<div class="col-sm-2"><input class="form-control" type="text"name="validade">
   			</div>

            <div class="form-group row">
   			<div class="col-sm-3"><label">estoque: </label"></div>
			<div class="col-sm-4"><input class="form-control" type="text"name="estoque"></div>
            </div>
            <div class="form-group row">

<center><button type="submit" class="btn btn-primary">GRAVAR</button></center>

   	     </div>
		</form>
     </body>
	 <script>
	alert("Produto Cadastrado com Sucesso!")
	</script>
<?php include("footer.php"); ?>