<?php  require 'header.php';
require_once 'conexao.php';
 ?>
 	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 110%;
			margin-top: 20px;
			border: none;
		}

		th {
			background-color: #333;
			color: white;
			padding: 10px;
			border: none;
		}

		td {
			  text-align: center;
			  border: none;
			  padding: 10px;
			  background-color: #1111;
			  border-top: 1px solid gray;
			}

		tr {
			 border: none;
		}

		th#nome {
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px;
			width: 50%;
		}


		th#datanasc {
			width: 20%;
		}

		th#opcoes {
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			width:35%;
		}

		button#cadastrarCliente {

			margin-top: 5px;
		}
	
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

input {
    border-radius: 50px;
    outline: none;
    border: none;
    padding: 10px;
    width: 175px;
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
	<title>Lista de Clientes</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js"></script>
</head>
<body>
	<center>
		<h1>Lista de Clientes</h1>

	</center>

		<div class="manageMember">
	<a href="cadastrarCliente.php"><button type="button" class="button"  id="cadastrarCliente">Cadastrar cliente</button></a>

	<a href="novacompra.php"><button type="button" class="button"  id="cadastrarCliente">Nova compra</button></a>

	<div id="pesquisa" style="float: right;">
		<input type="text" name="search" class="form-control input-sm" placeholder="&#xf002;  Pesquisar clientes">
	</div>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th id="nome">Nome</th>
				<th id="datanasc">Data de nascimento</th>
				<th>CPF</th>
				<th id="opcoes">Opções</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$stmt = $pdo->query("SELECT * FROM cliente");
			$count = $stmt->rowCount();
			 if($count > 0) {
				while($row = $stmt->fetch(PDO::FETCH_NUM)) {
					echo "<tr>
						<td>".$row[0]."</td>
						<td>".$row[1]."</td>
						<td>".$row[2]."</td>
						<td>
							<a href='edit.php?id=".$row[3]."'><button type='button' title='Editar dados' class='button'><i class='fas fa-edit'></i></button></a>
							<a href='remove.php?id=".$row[3]."'><button type='button' class='button' title='Deletar dados'><i class='fas fa-trash-alt'></i></button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Sem dados cadastrados</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
<script type="text/javascript">
	
	 $(function() {
  var $input = $("input[name='search']"),
    $context = $("table tbody tr");
  $input.on("input", function() {
    var term = $(this).val();
    $context.show().unmark();
    if (term) {
      $context.mark(term, {
        done: function() {
          $context.not(":has(mark)").hide();
        }
      });
    }
  });
});
</script>
<?php 
include 'footer.php'
?>