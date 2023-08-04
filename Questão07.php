<?php
$numeros = array(1, 3, 4, 5, 7, 9, 10, 14, 15, 17);
$primos = array();
$contador = 0;

foreach ($numeros as $numero)
{
    $Primo = true;

    if ($numero <= 1)
    {
        $Primo = false;
    }
    else
     {
        for ($j = 2; $j * $j <= $numero; $j++)
        {
            if ($numero % $j == 0)
            {
                $Primo = false;
                break;
            }
        }
    }

    if ($Primo)
    {
        $primos[$contador] = $numero;
        $contador++;
    }
}

echo "Números primos separados do vetor:\n";
foreach ($primos as $primo)
{
    echo "\t" . $primo;
}
?>
