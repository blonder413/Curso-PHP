<?php

function cuenta_regresiva($numero)
{
    if ($numero > 0) {
        print $numero;
        $numero--;
        cuenta_regresiva($numero);
    }
}

echo cuenta_regresiva(3);

// 1 * 2 * 3 * 4
/*
function factorial($n) {
    if ($n==1)
      return 1;
    else
      return $n * factorial($n-1);
}

echo factorial(5);
*/