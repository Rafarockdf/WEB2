<?php
/*
$cores = array("vermelho - ","azul - ","verde - ","amarelo");
echo $cores[0];
echo $cores[1];
echo $cores[2];
echo $cores[3];


$estado['sp'] = 'São Paulo';
$estado['mg'] = 'Minas Gerais';

echo $estado['mg'];
*/
$frutas['cor'] = 'vermelha';
$frutas['sabor'] = 'doce';
$frutas['formato'] = 'redonda';
$frutas['nome'] = 'maça';
$num = 1;
foreach ($frutas as $chave => $valor){
    echo "$chave => $valor <br>\n";
}

if (in_array('vermelha',$frutas)){
 echo "sim";
}

echo in_array('vermelha',$frutas);

$num = array(1,2,3,4,5,6);
array_push($num,6);
foreach($num as $i){
    echo "<br>$i<br>\n";
}

array_shift($num);
echo "----";
foreach($num as $i){
    
    echo "<br>$i<br>\n";
}
echo "----";
print_r($num);
?>