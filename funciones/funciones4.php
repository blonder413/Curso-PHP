<?php

/**
 * https://www.php.net/manual/es/functions.returning-values.php
 * Es posible definir un tipo de retorno nulo adicional en las funciones (PHP 7.1.0)
 * si omitimos ? devolverá un string y como el parámetro $saludo está por defecto null
 * será obligatorio pasarle el argumento al llamar la función o lanzará un PHP Fatal error:  Uncaught TypeError:
 */

function saludar($saludo = null): ?string {
    return $saludo;
}

var_dump(saludar('Hola mundo'));    // string(10) "Hola mundo"
var_dump(saludar());                // NULL


function saludar2($saludo = null): string {
    return $saludo;
}

var_dump(saludar2('Hola mundo'));   // string(10) "Hola mundo"

// PHP Fatal error:  Uncaught TypeError: saludar2(): Return value must be of type string
var_dump(saludar2());
