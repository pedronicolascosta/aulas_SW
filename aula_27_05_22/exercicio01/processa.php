<?php
    $temp = $_REQUEST['temp'];
    $escolha = $_REQUEST['escolha'];
    
    $resul = 0;

    if($escolha == 1){
        $resul = ($temp * (9/5) + 32);
        echo "$temp em FAHRENHEIT é $resul";
    }
    else{
        $resul = (($temp - 32) * (5/9));
        echo "$temp em CELSIUS é $resul";
    }
?>

