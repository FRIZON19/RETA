<?php
 include("header.php");
 include("valida.php"); ?>

<center><h1>CARDAPIO</h1></center>

<form method="POST" action="Pedido.php">
<div class="card-group">
  <div class="card">
    <img id="imgCinza" src="https://imagensemoldes.com.br/wp-content/uploads/2020/07/Imagem-Lanche-PNG.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">COMBO HAMBUGUER + BATATA + REFRIGERANTE</h5>
      <p class="card-text">Combo vem com Hambuguer da semana x-tudo com batata e refrigente a sua escolha. </p>
      <p class="card-text"><small class="text-muted">Valor: 23,00</small></p>
      <button type="submit" class="btn btn-primary">Pedir</button>
    </div>
  </div>
  <div class="card">
  <form method="POST" action="Pedido.php">
    <img src="http://delicialanches.com.br/wp-content/uploads/2018/02/COXINHATRANSP.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">COXINHA</h5>
      <p class="card-text">Coxinha Deliciosa Com Recheio de Frango com Catupiry</p>
      <p class="card-text"><small class="text-muted">Valor: 6,00</small></p>
      <button type="submit" class="btn btn-primary">Pedir</button>
    </div>
  </div>
  <div class="card">
    <form method="POST" action="Pedido.php">
    <img src="https://imagensemoldes.com.br/wp-content/uploads/2020/07/Refrigerante-PNG-1280x720.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">REFRIGERANTE</h5>
      <p class="card-text">Coca cola,Guarana,Pepis...</p>
      <p class="card-text"><small class="text-muted">Valor: 4,50</small></p>
      <button type="submit" class="btn btn-primary">Pedir</button>
    </div>
  </div>
</div>