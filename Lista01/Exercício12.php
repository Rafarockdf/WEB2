<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $soma = 0;
        for($i = 1; $i <= 200;$i++){
            if($i % 2 != 0){
                $soma = $soma + $i;
            }
        }
        echo $soma;
    ?>
</body>
</html>