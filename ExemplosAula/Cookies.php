<?php
    $nome_cookie = "usuario";
    $valor_cookie = "Rafael";
    setcookie($nome_cookie,$valor_cookie,time()+5,"/");
?>


<html>
    <body>
        <?php


        if(isset($_COOKIE[$nome_cookie])){
            echo "1";
        } else{
            echo "0";
        }
        ?>
    </body>
</html>

