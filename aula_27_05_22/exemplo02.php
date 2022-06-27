<?php
//criar uma função para somar os valores de um vetor
    $numeros = [3,5,8,10,20,23,57];

    function soma($vetor){
        $soma = 0;
        for ($i=0; $i<count($vetor); $i++){
            $soma = $soma + $vetor[$i];
        };
        echo "A soma é $soma";
    };

    soma($numeros);

?>