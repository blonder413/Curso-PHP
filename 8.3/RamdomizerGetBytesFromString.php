<?php
/**
 * Randomizer es una API de alto nivel de aleatoriedad proporcionada por Random\Engine. (PHP 8.2)
 * https://www.php.net/manual/es/class.random-randomizer.php
 * getBytesFromString Devuelve caracteres aleatorios a partir de una cadena y una cantidad de caracteres
 * https://www.php.net/manual/es/random-randomizer.getbytesfromstring.php
 */

$randomizer = new \Random\Randomizer();
$correoFalso = sprintf(
    "%s@ejemplo.com",
    $randomizer->getBytesFromString(
        'abcdefghijklmnopqrstuvwxyz0123456789',
        8,
    )
);

echo $correoFalso;
