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

    $sql_verifica_usuario = $conexao->prepare("SELECT * FROM usuarios");
    $sql_verifica_usuario->execute();
    $resultado = $sql_verifica_usuario->get_result();
    
    while ($usuario = $resultado->fetch_assoc()) {
        $login = $usuario['login'];
        $senha = $usuario['senha'];
        echo "Usuário: $login <br>";
    }
    

$conexao->close();
}
?>