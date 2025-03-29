<?php
$servername = "localhost";
$usuario = "rafael2";
$senha = "1234";
$database = "BancoTeste";

$conexao = new mysqli($servername, $usuario, $senha, $database);

// Verificar se houve erro na conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

    // Preparar a query para evitar SQL Injection
    $sql = $conexao->prepare("INSERT INTO produtos (nome, preco, estoque) VALUES (?, ?, ?)");
    $sql->bind_param("sdi", $nome, $preco, $estoque);  // 's' para string, 'd' para decimal (float), 'i' para inteiro

    if ($sql->execute()) {
        echo "Inserção feita com sucesso!";
    } else {
        echo "Erro ao inserir no banco: " . $sql->error;
    }

    $sql->close();
}

$conexao->close();
?>
