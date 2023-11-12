<?php
/**
 * PHP no es estricto con los tipos de datos, intenta convertirlos antes de operar con ellos
 * hasta PHP 7 era posible hacer operaciones del tipo 2 + "2a" pero en PHP 8 ya no es soportado
 * lo que sí soporta es operar con 2 tipos de datos distintos
 */

/*
+   -> suma
-   -> resta
*   ->  multiplicación
/   -> división
%   -> módulo
**  -> potencia
*/

$num1 = 6;
$num2 = "2";
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multi = $num1 * $num2;
$division = $num1 / $num2;
$modulo = $num1 % $num2;
$potencia = $num1 ** $num2;

echo $potencia;
