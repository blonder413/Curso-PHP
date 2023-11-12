<?php
/**
 * Es común que en los condicionales se necesiten realizar más de una comparación
 * para esto podemos usar los operadores lógicos
 */

$a = 4;
$b = 10;
$c = 13;

if ($a > $b and $a > $c) {
    echo "$a es el mayor";
} elseif ($b > $a and $b > $c) {
    echo "$b es el mayor";
} elseif ($c > $a and $c > $b) {
    echo "$c es el mayor";
} else {
    echo "existen valores iguales";
}
