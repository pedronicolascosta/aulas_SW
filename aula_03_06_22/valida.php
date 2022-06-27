<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'admin';
    $pass = 'admin';

    if(($usuario == $user) && ($senha == $pass)){
        // echo 'OK, USUÁRIO VÁLIDADO';
        session_start();
        $_SESSION['nome'] = $usuario;
        $_SESSION['logado'] = 1;
        header('Location: restrita.php');
    }
    else{
        echo 'USUÁRIO OU SENHA INCORRETA';
    }


?>