<?php

    $numeros = array(1, 4, 6, 89, 67, 12, 11, 45, 32, 21, 17, 111, 76, 55, 586);

    for ($i = 0; $i < 15; $i++)
    {
        if ($numeros[$i] % 2 == 0)
        {
            echo $numeros[$i], " - Par\n";
        }
        else
        {
            echo $numeros[$i], " - Ímpar\n";
        }
    }

?>