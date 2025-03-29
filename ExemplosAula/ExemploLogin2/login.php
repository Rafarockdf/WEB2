<?php

$servername = "localhost";
$usuario = "rafael";
$senha = "123";
$database = "BancoTeste";

$conexao = new mysqli($servername, $usuario, $senha, $database);

if($conexao->connect_error){
    die("Conexão falhou! ". $conexao->connect_error);
}

$sql = "CREATE TABLE teste(
        id int PRIMARY KEY
        );";
if($conexao->query($sql) === TRUE){
    echo "Tabela Criado com Sucesso!";
} else{
    echo "Erro ao criar o banco";
}
$conexao->close();

?>