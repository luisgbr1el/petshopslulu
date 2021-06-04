<?php
class Animal{

            public function cadastrar($raca, $sexo, $idade, $nome){
            global $pdo;
            
            $sql = "INSERT INTO animal(Raca, Sexo, Idade, Nome) VALUES ('$raca', '$sexo', '$idade', '$nome')";
            $sql = $pdo-> prepare($sql);
            $sql-> execute();
}
}
?>