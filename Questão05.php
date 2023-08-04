<?php

    $numeros = array(58, 3, 7, 4, 10, 90, 101, 134, 45, 67, 89, 12, 74, 489, 321, 125, 168, 18, 26, 41);

    $maiorNumero = 0;
    $menorNumero = 1000;
    $quantPar = 0;
    $somaNumeros = 0;

    for ($i = 0; $i < 20; $i++)
    {
        $somaNumeros += $numeros[$i];

        if ($numeros[$i] % 2 == 0)
        {
            $quantPar += 1;
        }
        if ($numeros[$i] > $maiorNumero)
        {
            $maiorNumero = $numeros[$i];
        }
        if ($numeros[$i] < $menorNumero)
        {
            $menorNumero = $numeros[$i];
        }
    }

    echo "O maior número é igual a ", $maiorNumero;
    echo "\nO menor número é igual a ", $menorNumero;
    echo "\nO percentual de números pares é igual a ", $quantPar*100/20, "%";
    echo "\nA média dos números do vetor é igual a ", $somaNumeros/20;
?>