<?php 

require_once 'conexao.php';

if($_POST) {
	$raca = $_POST['raca'];
	$idade = $_POST['idade'];
	$nome = $_POST['nome'];
	

	$id = $_POST['id'];

	$sql  = "UPDATE animal SET raca = '$raca', idade = '$idade', nome = '$nome' WHERE id = {$id}";
	if($pdo->query($sql)) {
		include 'header.php';
		echo "
		<style>
			.button{
		margin-top: 30px;
		margin-right: 20px;
    	font-size: 15px;
    	color: white;
    	background-color: black;
    	border-radius: 5px;
    	border:0px;
    	transition: 0.2s;
    	padding: 7px;
    	width: 140px;
    	font-family: 'Overpass', sans-serif;
    	border: 1px solid black;
    	font-weight: bold;
    	cursor: pointer;

	}
	button:hover{
    background-color: yellow;
    transition: 0.2s;
    color: black;
	}
	</style>
		</header>";
		echo "<center> <br> <br><h2>Atualizado com sucesso!</h2>";
		echo "<a href='animais.php?id=".$id."'><button type='button' class='button'>Voltar</button></a>";
		echo "<a href='index.php'><button type='button' class='button'>Página Principal</button></a>";
	} else {
		echo "Erro na atualização do registro";
	}

	$pdo = null;

}

?>