<?php
$flag = 0;
for($i = 1; $i<=50; $i++){
    for($j=2;$j<$i;$j++){
        if($i % $j == 0){
            $flag = 1;
            
        }
    }
    if($flag == 1){
        $flag = 0;
        continue;
    } else{
        echo 'O número ',$i, ' é primo <br>';
    }
}


?>
