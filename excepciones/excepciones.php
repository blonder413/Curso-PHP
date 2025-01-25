<?php

/**
 * Podemos manejar más de una excepción en un bloque catch
 * Al asignar el valor 0 a $n2 tenemos la excepción DivisionByZeroError
 * Al asignar texto que no contiene números a $n2 obtenemos la excepción TypeError
 * A partir de PHP 7.1
 */

try {
    $n1 = 4;
    $n2 = 0;
    $resultado = $n1 / $n2;
    echo $resultado;
} catch (DivisionByZeroError $e) {
    echo "El divisor  no debe ser cero." . PHP_EOL;
} catch (TypeError $e) {
    echo "El divisor debe ser un número." . PHP_EOL;
}

try {
    $n1 = 4;
    $n2 = 1;
    $resultado = $n1 / $n2;
    echo $resultado;
} catch (DivisionByZeroError | TypeError $e) {
    echo "El divisor debe ser un número y no debe ser cero.";
}
