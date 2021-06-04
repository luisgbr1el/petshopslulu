<?php

if (isset($_POST['nomecd']) && !empty($_POST['nomecd']) && isset($_POST['datacd']) && isset($_POST['cpfcd']) && !empty($_POST['cpfcd'])) {
	require_once '../conexao.php';
	require_once '../Cliente.class.php';
	$u = new Cliente();
	$nome = addslashes($_POST['nomecd']);
	$datanasc = addslashes($_POST['datacd']);
	$cpf = addslashes($_POST['cpfcd']);
    $u -> cadastro($nome, $datanasc, $cpf);
	echo "<script language='javascript' type='text/javascript'>
        alert('Dados cadastrados com sucesso!'); window.location.href='../clientes.php';</script>";
} 

?>