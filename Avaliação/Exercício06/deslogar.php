<?php
session_start(); 

$_SESSION = array();

session_destroy();

header("Location: ../Exercício03/formulário_exercício03.html");
exit();
?>
