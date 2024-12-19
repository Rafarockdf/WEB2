<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $lista = array(15,3,8,22,1);
    sort($lista);
    foreach($lista as $i){
        echo "$i<br>";
    }
    echo "<br>-----------------<br>";
    arsort($lista);
    foreach($lista as $i){
        echo "$i<br>";
    }
?>
</body>
</html>