<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = 5;
        for($i = 1; $i <= $num ; $i++){
            $resultado = $i * $num;
            echo "$num x $i = $resultado <br>";
        }    
    ?>
</body>
</html>