<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$media = ($num1 + $num2 + $num3) / 3;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Média</title>
</head>
<body>
    <h1>Média de três valores</h1>
    <p>Insira três valores para obter uma média total</p>

    <form action="processamento.php" method="POST">
    <p>Insira o primeiro número:</p>
    <input type="text" name="num1">
    <p>Insira o segundo número:</p>
    <input type="text" name="num2">
    <p>Insira o terceiro número:</p>
    <input type="text" name="num3">

    <input type="submit" value="SOMAR">
    </form>

    <?php

    echo "<h1> A média total é de $media</h1>";

    ?>


</body>
</html>