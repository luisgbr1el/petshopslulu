<?php
class Funcionario{
	public function login ($login, $senha){
global $pdo;
        $sql = $pdo->prepare("SELECT * FROM funcionarios WHERE login = :login AND senha = :senha");
        $sql -> bindValue('login', $login);
        $sql -> bindValue('senha', md5($senha));
        $sql-> execute();
         if ($sql-> rowCount()>0){
            $dado = $sql-> fetch();
        $_SESSION['login'] = $dado['login'];
                return true;
}else {
	return false;

}              
}
public function logged($login){
            global $pdo;
            $array = array();

            $sql = "SELECT * FROM funcionarios WHERE login= :login";
            $sql = $pdo-> prepare($sql);
            $sql-> bindValue('login', $login);
            $sql-> execute();
if($sql-> rowCount() > 0){
                $array = $sql-> fetch();
            }else{
       
                header("Location: index.php");
            }
            return $array;
            }
            public function cadastro($usuario, $senha, $nome){
            global $pdo;
            $senha = md5($senha);
            $sql = "INSERT INTO funcionarios(login, senha, nome) VALUES ('$usuario','$senha', '$nome')";
            $sql = $pdo-> prepare($sql);
            $sql-> execute();
}
}
?>