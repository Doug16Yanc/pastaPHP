<?php

    $string = "EXPERIENCIA";
    $correncia = "E";
    $resultado = "";

    for ($i = 0; $i < strlen($string); $i++)
    {
        if ($string[$i] != $correncia)
        {
            $resultado .= $string[$i];
        } 
    }
    echo $resultado;
?>