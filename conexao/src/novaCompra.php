<?php

if (isset($_POST['cliente']) && !empty($_POST['cliente']) && isset($_POST['preco']) && isset($_POST['desconto']) && isset($_POST['preco']) && isset($_POST['dataProcessamento']) && isset($_POST['dataVencimento'])) {
	require_once '../conexao.php';
	require_once '../Compra.class.php';
	date_default_timezone_set('America/Sao_Paulo');
	$u = new Compra();
	$cliente = addslashes($_POST['cliente']);
	$preco = addslashes($_POST['preco']);
	$desconto = addslashes($_POST['desconto']);
	$dataProcessament = date_create($_POST['dataProcessamento']);
	$dataVenciment = date_create($_POST['dataVencimento']);
	$dataProcessamento = date_format($dataProcessament,'d/m/Y');
	$dataVencimento = date_format($dataVenciment,'d/m/Y');
	$precoFinal = ($preco - $desconto);
    $u -> compra($cliente, $preco, $desconto, $precoFinal, $dataProcessamento, $dataVencimento);
	echo "<script language='javascript' type='text/javascript'>
        alert('Compra registrada com sucesso!'); window.location.href='../clientes.php';</script>";
} else {
	echo "<script language='javascript' type='text/javascript'>
        alert('Preencha todos os campos!'); window.location.href='../novacompra.php';</script>";
}
?>