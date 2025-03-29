<?php

$servername = "localhost";
$usuario = "rafael2";
$senha = "1234";
$database = "BancoTeste";

$conexao = new mysqli($servername, $usuario, $senha, $database);

if($conexao->connect_error){
    die("Conexão falhou! ". $conexao->connect_error);
}

$sql = "CREATE TABLE produtos(
        id int AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        estoque INT DEFAULT 0
        );";
if($conexao->query($sql) === TRUE){
    echo "Tabela Criado com Sucesso!";
} else{
    echo "Erro ao criar o banco";
}
$conexao->close();

?>