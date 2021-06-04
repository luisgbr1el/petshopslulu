<?php
class Compra{

            public function compra($cliente, $preco, $desconto, $precoFinal, $dataProcessamento, $dataVencimento){
            global $pdo;
            
            $sql = "INSERT INTO compra(cliente, preco, desconto, precoFinal, dataProcessamento, dataVencimento) VALUES ('$cliente', '$preco', '$desconto', '$precoFinal', '$dataProcessamento', '$dataVencimento')";
            $sql = $pdo-> prepare($sql);
            $sql-> execute();
}
}
?>