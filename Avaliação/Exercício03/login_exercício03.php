<?php
session_start();
$servername = "localhost";
$usuario = "rafael2";
$senha = "1234";
$database = "sistema_login";

$conexao = new mysqli($servername, $usuario, $senha, $database);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = hash('sha256', $_POST["senha"]); 

    $sql_verifica_usuario = $conexao->prepare("SELECT senha FROM usuarios WHERE login = ?");
    $sql_verifica_usuario->bind_param("s", $login);
    $sql_verifica_usuario->execute();

    $resultado = $sql_verifica_usuario->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if ($usuario['senha'] === $senha) {
            $_SESSION['login'] = $login;
            echo "Login efetuado com sucesso!";
            header("Location: logado_exercício03.php");
            exit();
        } else {
            echo "Login ou senha incorretos!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    $sql_verifica_usuario->close();
}

$conexao->close();
?>
