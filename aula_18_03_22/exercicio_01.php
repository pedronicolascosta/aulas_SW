<?php

$idade = 15 ;
$hab = TRUE ;

$teste = "";
if ($hab == TRUE)
{$teste = "SIM";}
else
{$teste = "NAO";}

echo "sua idade é: $idade anos <br>";
echo "tem habilitação? $teste <br>";
echo "<br>";

if ($idade>= 18)
    {
        if ($hab == true)
        {echo "VOCÊ TEM IDADE E HABILITACAO PARA DIRIGIR, PARABENS!";}

        else
        {echo "VOCE TEM IDADE MAS NAO TEM HABILITACAO PARA DIRIGIR";}
    }

else
    {echo"VOCE NAO TEM A IDADE NECESSARIA PARA DIRIGIR";}

?>