<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
     <link rel="stylesheet" type="text/css" href="styles/cadastro.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f72d804116.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>
		Cadastro Petshop
	</title>
</head>
<body>
    <center>


<!-- The Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p>Some text in the Modal..</p>
      <p>Some text in the Modal..</p>
    </div>
  </div>
</div>
   <a href="index.php"> <img id="logo" src="images/logo.png"> </a>
<form class="formlogin" action="conexao/logar.php" method="POST">
            <div class="card">
            <div class="cardtop">
                
             <H2 class="text">Cadastro</H2>
            <h4>Gerenciar o Sistema</h4>
            
            
            <div>
                
               <i class="fas fa-at"></i>ㅤ<input type="text" name="usuariocd" placeholder="Usuário" required maxlength="60">
                <br> <br>
                <i class="fas fa-key"></i>ㅤ<input type="password" name="senhacd" placeholder="Senha" required maxlength="16">
                <br> <br>
                <i class="fas fa-user"></i>ㅤ<input type="text" name="nomecd" placeholder="Nome" required maxlength="60">
                
            </div>
            <button class="button" type="submit">Cadastrar</button>
             </form>
            </div>
            </center>


</body>
</html> 