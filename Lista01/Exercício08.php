<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = 4;
        $flag = 0;
        for($i = 2; $i < 7; $i++){
            if($num % $i == 0){
                echo "O número $num não é primo";
                $flag = 1;
                break;
            }
        }
        if($flag == 0){
            echo "O número $num é primo";
        }
    ?>
</body>
</html>