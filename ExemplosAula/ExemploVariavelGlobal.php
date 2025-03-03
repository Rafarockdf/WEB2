<?php
$x = 42;
function teste(){
    
    echo $GLOBALS['x'];
    /*
        global $x;     Ambos os jeitos funcioam.
        echo x;
    */
}

teste();
?>