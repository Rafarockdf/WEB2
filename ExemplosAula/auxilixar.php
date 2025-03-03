<?php

if(isset($_GET['nome']) && !empty($_GET['nome'])){
    $nome = $_GET['nome'];
    echo "Olá, $nome! Seja bem-vindo(a)!";
} else{
    echo "Por favor, informe seu nome";
}

?>

