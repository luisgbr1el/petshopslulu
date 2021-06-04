<?php
  include 'logar.php'
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f72d804116.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
   <!--  <link rel="stylesheet" type="text/css" href="../styles/login.css"> -->
	
<div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="clientes.php">Clientes</a>
  <a href="animais.php">Animais</a>
  <div class="dropdown">
    <button class="dropbtn">Cadastrar
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cadastrarCliente.php">Cliente</a>
      <a href="cadastrarAnimal.php">Animal</a>
      <a href="cadastrarPromocoes.php">Promoção</a>
    </div>
  </div>
  <a href="#about">Listas</a>
  <a id="sair" href="../index.php">Sair</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>


