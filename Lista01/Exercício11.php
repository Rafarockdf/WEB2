<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 9;
        for($i = $num; $i > 1;$i--) {
            if($num % 2 == 0){
                $num = $num / 2;
                echo "Condição do 2: $num<br>";
            }
            if($num % 3 == 0){
                $num = ($num * 3) + 1;
                echo "Condição do 3: $num<br>";
            }
        }
    
    ?>
</body>
</html>