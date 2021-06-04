<?php
	include 'header.php';
?>
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

.cadastrarCliente {
    margin-top: 60px;
    text-align: center;
}
</style>
<title>Cadastrar animal</title>
</head>
<body>
    <center>


<!-- The Modal -->
<form class="formCadastro" action="src/cadastroAnimal.php" method="POST">
            <div class="cadastrarCliente">
                
             <H2 class="text">Cadastrar animal</H2>
            
            
            <div>
                Nome <br>
                <i class="fas fa-user"></i>ㅤ<input type="text" name="nomecd" required maxlength="50" minlength="10" style="text-transform:uppercase" oninput="this.value = this.value.toUpperCase()">
                <br> <br>	
                Raça <br>
                <i class="far fa-calendar"></i>ㅤ<input type="text" name="racacd" required maxlength="60">
                <br> <br>
                Idade <br>
                <i class="fas fa-address-card"></i>ㅤ<input type="tel" name="idadecd" required minlength="1" maxlength="2" step="1" >
                <br> <br>
                Sexo <br>
                <select name="sexo">
                	<option>Macho</option>
                	<option>Fêmea</option>

                </select>
                
            </div>
            <button class="button" type="submit">Cadastrar</button>
             </form>
            </div>
            </center>


</body>
</html> 