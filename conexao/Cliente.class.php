<?php
class Cliente{

            public function cadastro($nome, $datanasc, $cpf){
            global $pdo;
            
            $sql = "INSERT INTO cliente(nome, datanasc, cpf) VALUES ('$nome', '$datanasc', '$cpf')";
            $sql = $pdo-> prepare($sql);
            $sql-> execute();
}
}
?>