<?php
    //podemos definir vetores de duas formas:
    $teste = [10,'oi',1.6,true];
    $teste = array(10,'oi',1.6,true); 

    //exibimos uma posição especifica do vetor desse jeito:
    //(a primeira posição é zero)
    echo $teste[1];

    //usamos o count para atribuir a variavel $qtde a quantidade de valores dentro do vetor $teste
    $qtde = count($teste);
    echo "<br>";
    echo "número de elementos do vetor: $qtde";
    echo "<hr>";

    // dentro do parenteses do for, a declaração $i=0 serve para que começe com o numero zero - em $i<$qtde declaramos que o laço de repetição execute até que isso seja mentira, e o $i++ serve para adicionar mais um toda vez que executar
    for ($i=0; $i<$qtde; $i++){
        echo "Valor do i = $i - Valor: $teste[$i]<br>";
    };
    echo "<hr>";

    //sortear numero aleatorio INTEIRO
    $numero_sorteado_inteiro = rand(1,10); //aqui será sorteado um numero entre 1 e 10
    echo $numero_sorteado_inteiro;
    echo "<hr>";

    //sortear numero aleatorio DECIMAL
    $numero_sorteado_decimal = ((rand(1,10))/10); //sera sorteado um  numero entre 1 e 10 e depois dividido por 10 para se obter um numero decimal
    echo $numero_sorteado_decimal;
    echo "<hr>";

    //somar todos os valores de um vetor
    $vetor = [1,5,8,10];
    $quantidade = count($vetor);
    $soma = 0;
    for ($i=0; $i<$quantidade; $i++){
        $soma = $soma + $vetor[$i];
    };
    echo "a soma dos vetores é: $soma";
    echo "<hr>";

    //somar todos os valores de um vetor
    $vetor = [1,5,8,10];
    $quantidade = count($vetor);
    $media = 0;
    for ($i=0; $i<$quantidade; $i++){
        $media = $soma / $quantidade;
    };
    echo "a media dos vetores é: $media";
    echo "<hr>";





?>