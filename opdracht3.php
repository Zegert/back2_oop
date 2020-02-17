<?php
$getal = rand(0, 9999999999999999);
//var_dump($getal);
function isEven($getal)
{

    $i = ($getal / 2);
    $j = round($i, 0);

    $r = $j - $i;

    if ($r == 0) {
        echo "$getal is even";
    } else {
        echo "$getal is oneven";
    }
}

echo isEven($getal);
