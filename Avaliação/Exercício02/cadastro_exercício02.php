<?php

$servername = "localhost";
$usuario = "rafael";
$senha = "123";
$database = "sistema_login";

$conexao = new mysqli($servername, $usuario, $senha, $database);


if($conexao->connect_error){
    die("Conexão falhou! ". $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$login = $_POST["login"];
$senha = hash('sha256',$_POST["senha"]);

$sql =$conexao->prepare("INSERT INTO USUARIOS (login,senha) VALUES (?,?)");
$sql->bind_param("ss", $login, $senha);

if($sql->execute()){
    echo "Usuário Cadastrado com Sucesso!";
} else{
    echo "Erro ao Cadartrar o Usuário";
}
$conexao->close();
}
?>