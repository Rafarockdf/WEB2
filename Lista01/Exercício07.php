<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 100;
        $resultado = 0;
        while($num != 0){
            $resultado = $num + $resultado;
            $num = $num -1;
        }
        echo $resultado;
    ?>
</body>
</html>