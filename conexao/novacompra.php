<?php  require 'header.php';
require_once 'conexao.php';
 ?>
 	<style type="text/css">
	.button{

    font-size: 15px;
    color: white;
    background-color: black;
    border-radius: 5px;
    border:0px;
    transition: 0.2s;
    padding: 7px;
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

.valores, option {
    border-radius: 50px;
    outline: none;
    border: none;
    padding: 10px;
    width: 100px;
    padding-left: 20px;
	font-family: 'FontAwesome', 'Arial';
}

input {
    border-radius: 50px;
    outline: none;
    border: none;
    padding: 10px;
    width: 200px;
    padding-left: 20px;
	font-family: 'FontAwesome', 'Arial';
}

select {
	border-radius: 50px;
    outline: none;
    border: none;
    padding: 10px;
    width: 300px;
    padding-left: 20px;
	font-family: 'FontAwesome', 'Arial';
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

	</style>

	<title>Nova Compra</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js"></script>
</head>
<body>
		<center>
			<br> <br>
			<h1>Nova compra</h1>

			<form class="formNovaCompra" action="src/novaCompra.php" method="POST">
			<select name="cliente">
				<option value="null">Selecione o cliente</option>
			<?php
			$stmt = $pdo->query("SELECT * FROM cliente");
			$count = $stmt->rowCount();
			 if($count > 0) {
				while($row = $stmt->fetch(PDO::FETCH_NUM)) {
					echo "<option>".$row[0]."</option>";
				}
			} else {
				echo "<option>Nenhum cliente cadastrado.</option>";
			}
			?>
			</select>
			<br> <br>

			<input name="preco" type="number" step="0.01" min="0" placeholder="Preço (R$)" class="valores" />
			ㅤㅤ
			<input name="desconto" type="number" step="0.01" min="0" placeholder="Desconto (R$)" class="valores" />
			<br> <br>
			Data de processamento da compra: <br>
			<input type="date" name="dataProcessamento">
			<br> <br>
			Data de vencimento da compra: <br>
			<input type="date" name="dataVencimento"> <br>
			<br>
			 <button class="button" type="submit">Prosseguir</button>
			</form>
			<br> <br> <br> <br>
		</center>
</body>
<?php include 'footer.php' ?>