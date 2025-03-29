<?php
    session_start();
    $usuario_correto = "Rafarockdf";
    $senha_correto = 12345;

    if(isset($_SESSION['usuario']) and isset($_COOKIE['usuario'])){
        header("Location: auxiliar.php");
        exit();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $lembrar = isset($_POST['lembrar']);
        if($usuario == $usuario_correto and $senha == $senha_correto){
            $_SESSION['usuario'] = $usuario;
            if($lembrar){
                setcookie('usuario',$usuario,time()*60*60);
            }
            header("Location: auxiliar.php");
            exit();
        } else{
            echo 'Usuário ou senha digitados errados';
        }
    }
    


?>