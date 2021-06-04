<?php 

require_once 'conexao.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "DELETE FROM cliente WHERE id = {$id}";
	if($pdo->query($sql)) {
		echo "<p>Removido com sucesso!!</p>";
		echo "<a href='clientes.php'><button type='button'>Voltar</button></a>";
	} else {
		echo "Erro na remoção registro : ";
	}

	$pdo = null;
}

?>