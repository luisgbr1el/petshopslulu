<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f72d804116.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>
		Login Petshop
	</title>
</head>
<body>
  <center>
   <a href="index.php"> <img id="logo" src="images/logo.png"> </a>
<form class="formlogin" action="conexao/logar.php" method="POST">
        <div class="card">
            <div class="cardtop">
            <H2 class="text">Login</H2>
            <h4>Gerenciar o Sistema</h4>
            </div>

            <div class="cardcenter">
          
                <i class="fas fa-at"></i>ㅤ<input type="text" name="usuario" placeholder="Usuário" required maxlength="60">
                <br> <br>
                <i class="fas fa-key"></i>ㅤ<input type="password" name="senha" placeholder="Senha" required maxlength="16">
                <br> <br>
                <a id="a" type="button" href="cadastro.php">Cadastrar-se</a>
                <br>
            <button class="button" type="submit">Entrar</button>
            </div>

            </form>
        </div>

   </body>
</html> 