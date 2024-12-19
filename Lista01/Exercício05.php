<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = 18;
        if($idade < 13){
            echo "Criança";
        } else if($idade < 18){
            echo "Adolescente";
        } else if($idade < 60){
            echo "Adulto";
        } else{
            echo "Idoso";
        }
    ?>
</body>
</html>