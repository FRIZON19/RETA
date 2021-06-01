<?php
include("header.php"); 
include("valida.php"); ?>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">SobreNome</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Observação</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
</div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Forma de Pagamento</label>
    <select class="form-select" aria-label="Default select example">
      <option selected disabled value=""></option>
      <option>CARTAO</option>
      <option>DINHEIRO</option>
      <option>PIX</option>
      <option>OUTRO</option>
    </select>
  <div class="col-12">
  <br><button type="submit" class="btn btn-primary">Confirmar Pedido</button><br>
  </div>
  
</form>