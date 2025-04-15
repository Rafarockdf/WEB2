<?php
session_start();


if(isset($_SESSION['login'])){
    header("Location: logado_exercício03.php");
    exit();
} else{
    header("Location: ../Exercício03/formulário_exercício03.html");
    exit();
}
?>