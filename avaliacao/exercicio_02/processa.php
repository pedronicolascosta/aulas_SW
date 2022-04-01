<?php
$n1 = $_REQUEST['n1'];
$n2 = $_REQUEST['n2'];
$n3 = $_REQUEST['n3'];

$val1 = "";
$val2 = "";
$val3 = "";

if ($n1<$n2 && $n1<$n3)
{
    if($n2<$n3){
        $val2 = $n2;
        $val3 = $n3;}
    else{
        $val2 = $n3;
        $val3 = $n2;
    }
    $val1 = $n1;
}

if ($n2<$n1 && $n2<$n3)
{
    if($n1<$n3){
        $val2 = $n1;
        $val3 = $n3;}
    else{
        $val2 = $n3;
        $val3 = $n1;
    }
    $val1 = $n2;
}

if ($n3<$n1 && $n3<$n2)
{
    if($n1<$n2){
        $val2 = $n1;
        $val3 = $n2;}
    else{
        $val2 = $n1;
        $val3 = $n2;
    }
    $val1 = $n3;
}

echo "Você digitou os números nesta ordem: <br> $n1 <br> $n2 <br> $n3 <br>";

echo "Vamos colocá-los em ordem crescente! <br> $val1 < $val2 < $val3";


?>