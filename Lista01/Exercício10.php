<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vet = array(1,1);
        for($i = 2; $i <= 10; $i++){
            $vet[$i] = $vet[$i-1] + $vet[$i-2];
        }
        foreach($vet as $num){
            echo "$num ";
        }
    ?>

</body>
</html>