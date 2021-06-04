<?php 
include 'header.php';
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
	<title>Editar Empregado</title>

	<style type="text/css">

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
.tablep{
    padding-top: 10px;
    margin-top: 50px;
}

input {
    border-radius: 10px;
    outline: none;
    border: none;
    padding: 10px;
    width: 250px;
    padding-left: 20px;
    font-family: 'Overpass', sans-serif;
    margin: 10px;
}

a#a {
    text-decoration: none;
    color: black;
    font-weight: bold;
    transition: 0.2s;
    padding: 5px;
    border-radius: 5px;
}
a#a:hover {
    background-color: rgb(200,200,200);
    transition: 0.2s;
}

.editarCliente {
	margin-top: 60px;
	text-align: center;
}
	</style>

</head>
<body>

	
	<center>
	<form action="../updateAnimal.php" method="post">
		<div class="editarCliente">

			<h1>Editar cliente</h1>
				Nome completo<br>
				<input type="text" name="nome" placeholder="Nome completo" minlength="10" value="<?php echo $data['nome'] ?>" style="text-transform:uppercase" oninput="this.value = this.value.toUpperCase()" />
					<br> <br>
				Data de nascimento <br>
				<input type="date" name="raca" placeholder="Data de nasc." value="<?php echo $data['datanasc'] ?>" />
				<br><br>

				CPF (somente dígitos) <br>
				<input type="tel" name="sexo" required maxlength="11" placeholder="Novo CPF" value="<?php echo $data['cpf'] ?>" />
                <br> <br>

                Idade <br>

                <input type="tel" name="idade" required maxlength="11" placeholder="Novo CPF" value="<?php echo $data['cpf'] ?>" />
				<br>

				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<button type="submit" class="button">Salvar Alterações</button>
				<a href="index.php"><button type="button" class="button">Voltar</button></a>

		</div>
	</form>
	</center>

</body>
</html>

<?php
}
?>