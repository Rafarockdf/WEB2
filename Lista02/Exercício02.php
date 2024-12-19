<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = array("maçã","banana","melancia","morango","pera");
        array_push($lista,"pitaia");
        array_push($lista,"pinha");
        foreach($lista as $i){
            echo "$i<br>";
        }
    ?>
</body>
</html>