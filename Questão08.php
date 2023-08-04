<?php

    $string = "DOUGLAS";

    $auxiliar;

    for ($i =  0; $i < strlen($string); $i++)
    {
        for ($j = 0; $j < $i; $j++)
        {
            $auxiliar = $string[$i];
            $string[$i] = $string[$j];
            $string[$j] = $auxiliar;
        }
    }

    echo $string;

?>