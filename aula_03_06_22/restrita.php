<?php
    session_start();
    if($_SESSION['logado'] != 1){
        header('Location: index.php');
    }

    $nome = $_SESSION['nome'];
    echo "Bem vindo $nome";
    echo "<br>";
    echo 'VOCÊ ESTÁ NA PÁGINA RESTRITA!!!';

    echo "<br>";

    echo "<a href='logout.php'>Sair</a>"

?>