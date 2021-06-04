<?php 

require_once '../conexao.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM animal WHERE id = {$id}";
	$result = $pdo->query($sql);

	$data = $result->fetch(PDO::FETCH_ASSOC);

	$pdo = null;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remover Empregado</title>
</head>
<body>

<h3>Você tem certeza que deseja remover ?</h3>
<form action="removerAnimal.php" method="post">

	<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
	<button type="submit">Sim</button>
	<a href="../animais.php"><button type="button">Voltar</button></a>
</form>

</body>
</html>

<?php
}
?>