<?php
include("header.php"); 
include("valida.php"); ?>

  <title>Cadastro Cliente</title>
 <h1>CADASTRO DE CLIENTES</h1>

	<form method="POST" action="cliente.php">

		<div class="form-group row">
		<div class="col-sm-1"><label">cod: </label"></div>	
		<div class="col-sm-3"><input class="form-control" type="text"name="cod"></div>
		<div class="col-sm-1"><label">nome: </label"></div>	
		<div class="col-sm-3"><input class="form-control" type="text"name="nome"></div>
		<div class="col-sm-1"><label">cfp: </label"></div>
		<div class="col-sm-3"><input class="form-control" type="text"name="cnpj"></div>
		<div class="col-sm-1"><label">cnpj: </label"></div>
		<div class="col-sm-3"><input class="form-control" type="text"name="cpf"></div>
		</div>

		<div class="form-group row">
		<div class="col-sm-1"><label">telefone: </label"></div>	
		<div class="col-sm-2"><input class="form-control" type="text"name="telefone"></div>
		<div class="col-sm-1"><label">telefonefixo: </label"></div>
		<div class="col-sm-4"><input class="form-control" type="text"name="telefonefixo"></div>
		<div class="col-sm-1"><label">email: </label"></div>
		<div class="col-sm-3"><input class="form-control" type="text"name="email"></div>
   		</div>

  	    <div class="form-group row">
		<div class="col-sm-1"><label">endereço: </label"></div>	
		<div class="col-sm-2"><input class="form-control" type="text"name="endereço"></div>
		<div class="col-sm-1"><label">cidade: </label"></div>
		<div class="col-sm-4"><input class="form-control" type="text"name="cidade"></div>
		<div class="col-sm-1"><label">uf: </label"></div>
		<div class="col-sm-3"><input class="form-control" type="text"name="uf"></div>
   		</div>

   		<button type="submit" class="btn btn-primary">GRAVAR</button>

   	
	</form>
       </div>
     </body>
		<script>
             alert("Cliente Cadastrado com Sucesso!")
        </script>
<?php include("footer.php"); ?>