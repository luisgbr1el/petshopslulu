<h1 align="center">Sistema de Petshop</h1>

<img src="https://img.shields.io/badge/PHP-v8.0.2-blue"></img>
<img src="https://img.shields.io/badge/HTML-v5-yellow"></img>
<img src="https://img.shields.io/badge/CSS-v3-red"></img>
<img src="https://img.shields.io/badge/phpMyAdmin-v5.0.4-yellowgreen"></img>

Sistema de Petshop atribuído pelo professor Adeilson da EEEP Manoel Mano, de Crateús - CE.
 
 ## 🚩 Instalação
 
 Clone o repositório com o Git ou baixe como zip:
 ```
 git clone https://github.com/luisgbr1el/petshopslulu.git
 ```
 
 ## 🚩 Configuração
 
 Modifique o arquivo `conexao/conexao.php` com o nome do *banco, usuário, host e senha* do seu **phpMyAdmin**:
 
```
 <?php 
    session_start();
    $localhost = 'host';
    $user = "usuario";
    $password = "senha";
    $banco = "nomedobanco";
global $pdo;
try{
    $pdo = new PDO("mysql:dbname=" .$banco."; host=" .$localhost, $user, $password);
    $pdo-> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERRO: ", $e->getMessage();
    exit;
}
?>
```

### Estrutura do banco de dados
Insira esse código `.sql` na aba **SQL** do banco de dados criado:

```
CREATE TABLE `animal` (
  `Nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Raca` varchar(20) DEFAULT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Idade` int DEFAULT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `cliente` (
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datanasc` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `compra` (
  `idCompra` int NOT NULL,
  `Cliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dataProcessamento` varchar(10) NOT NULL,
  `dataVencimento` varchar(10) NOT NULL,
  `Preco` int DEFAULT NULL,
  `Desconto` int DEFAULT NULL,
  `precoFinal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `funcionarios` (
  `login` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `servico` (
  `Preco` int DEFAULT NULL,
  `Horario` int DEFAULT NULL,
  `Disponibilidade` int DEFAULT NULL,
  `Tosa` varchar(20) DEFAULT NULL,
  `Banho` varchar(20) DEFAULT NULL,
  `Animal` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Índices

ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`);


ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `servico`
  ADD KEY `Animal` (`Animal`);


-- AUTO_INCREMENT de tabelas despejadas

ALTER TABLE `animal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `cliente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

ALTER TABLE `compra`
  MODIFY `idCompra` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `funcionarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


-- Restrições para despejos de tabelas

ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`Animal`) REFERENCES `animal` (`id`);
COMMIT;
```
