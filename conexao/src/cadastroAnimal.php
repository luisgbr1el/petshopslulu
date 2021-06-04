<?php

if (isset($_POST['nomecd']) && !empty($_POST['nomecd']) && isset($_POST['racacd']) && isset($_POST['idadecd']) && !empty($_POST['sexo'])) {
	require_once '../conexao.php';
	require_once '../Animal.class.php';

	$u = new Animal();
	$nome = addslashes($_POST['nomecd']);
	$raca = addslashes($_POST['racacd']);
	$idade = addslashes($_POST['idadecd']);
	$sexo = addslashes($_POST['sexo']);
    $u -> cadastrar($raca, $sexo, $idade, $nome);
	echo "<script language='javascript' type='text/javascript'>
        alert('Dados cadastrados com sucesso!'); window.location.href='../animais.php';</script>";
} 

?>