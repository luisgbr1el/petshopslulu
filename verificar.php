<?php
  require 'Funcionario.class.php';
    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){  
    echo 'foi iniciada';
    $u = new Funcionario();
    $listLogged = $u->logged($_SESSION['login']);
    $nomeuser = $listLogged['nome'];
    }else{
      header('Location: index.php');
    	echo "verificar se não";
    }
?>