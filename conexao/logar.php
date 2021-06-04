<?php
if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha'])){
	require 'conexao.php';
	require '../Funcionario.class.php';
	$u = new Funcionario();
	$login = addslashes($_POST['usuario']);
	$senha = addslashes($_POST['senha']);
      if($u->login($login, $senha) == true){
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';</script>";
        // header("Location: header.php");
      }else if ($u->login($login, $senha) == false) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Dados cadastrados com sucesso!'); window.location.href='../index.php';</script>";
      }
} else if (isset($_POST['usuariocd']) && !empty($_POST['usuariocd']) && isset($_POST['senhacd']) && isset($_POST['nomecd']) && !empty($_POST['nomecd'])) {
	require_once 'conexao.php';
	require_once '../Funcionario.class.php';
	$u = new Funcionario();
	$usuario = addslashes($_POST['usuariocd']);
	$senha = addslashes($_POST['senhacd']);
	$nome = addslashes($_POST['nomecd']);
    $u -> cadastro($usuario, $senha, $nome);
	echo "<script language='javascript' type='text/javascript'>
        alert('Dados cadastrados com sucesso!'); window.location.href='../index.php';</script>";
} 
?>