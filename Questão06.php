<?php

    $vetor1 = array(1, 5, 8, 10, 34, 23, 101, 78, 0, 6);
    $vetor2 = array(1, 5, 7, 11, 23, 45, 67, 89, 2, 0);
    $vetor3 = array();

    $contador = 0;

    for ($i = 0; $i < 10; $i++)
    {
        $igual = false;

        for($j = 0; $j < 10; $j++)
        {
            if ($vetor1[$i] == $vetor2[$j])
            {
                $igual = true;
            }
        }  
        if (!$igual)
        {
            $vetor3[$contador] = $vetor1[$i];

            $contador += 1;
        }
    }

    for ($i = 0; $i < 10; $i++) {
        $igual = false;
    
        for ($j = 0; $j < 10; $j++) {
            if ($vetor2[$i] == $vetor1[$j]) {
                $igual = true;
                break;
            }
        }
    
        if (!$igual) {
            $vetor3[$contador] = $vetor2[$i];

            $contador += 1;
        }
    }

    echo "Números não comuns:\n";

    for ($i = 0; $i < 10; $i++)
    {
        echo "\t", $vetor3[$i];
    }
?>