<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $lista = array(1,2,3,4,5,6,7,8,9,10);
        foreach($lista as $num){
            if($num % 2 == 0){
                echo "$num<br>";
            }
            
        }
    ?>
</body>
</html>