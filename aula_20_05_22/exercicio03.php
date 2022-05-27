<?php
$vetor = [];
$soma = 0;

for($a=0; $a<10; $a++){
    $sorte= rand(1,100);
    $vetor[$a] = $sorte;
    echo "O número $vetor[$a] foi sorteado na posição $a do vetor. <br>";
    $soma = $soma + $vetor[$a];
};
$media = $soma/10;
echo "A média de todos os valores do vetor é $media";

?>