<?php
//---------------------------------------------//
echo "1 - Função sem retorno e sem parâmetros <br>";
function teste(){
    echo "Anderson Vanin";
};
//ate aqui, nada acontece na tela, pois apenas declaramos ela, para que o comando da funcao teste seja executado, devemos chamar a funcao teste:

//chamamos a funcao assim:
teste(); 
echo "<hr>";

//---------------------------------------------//

echo "2 - Função com retorno e sem parâmetros <br>";
function teste2(){
    $retorno = "Outro texto";
    return $retorno;
};

$recebe = teste2(); 
echo "$recebe <br>";
echo "<hr>";

//---------------------------------------------//

echo "3 - Função sem retorno e com parâmetros <br>";
function teste3($a){
    echo "$a <br>";
};

teste3('Oi galera');
teste3('Aula de SW I');
$x = 10;
teste3($x);
echo "<hr>";

//---------------------------------------------//

echo "4 - Função com retorno e com parâmetros <br>";
function teste4($x,$y){
    $soma = $x + $y;
    return $soma;
};

$resultado = teste4(10,20);
echo "A soma é: $resultado";
echo "<hr>";

?>

