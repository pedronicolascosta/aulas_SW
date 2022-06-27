<?php
//criar uma função para exibir valores ímpares de um vetor
    $numeros = [3,5,8,10,20,23,57];

    function impares($vetor){
        $soma = 0;
        for ($i=0; $i<count($vetor); $i++){
            if($vetor[$i] % 2 == 1){
                echo "$vetor[$i] <br>";
            }
        };
    };

    impares($numeros);

?>