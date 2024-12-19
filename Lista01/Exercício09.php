<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 10;
        $resultado = 1;
        for($i = $num; $i > 0; $i--){
 
            $resultado = $i * $resultado;
        }
        echo "O fatorial do número $num é $resultado";
    ?>
</body>
</html>