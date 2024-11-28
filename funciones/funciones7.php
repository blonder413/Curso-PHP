<?php
/**
 * First class callable es una forma de crear callbacks
 * los ... son parte de la sintaxis
 */
// $caracteres almacena ahora la referencia a la función strlen
$caracteres = 'strlen'(...);

echo $caracteres("hola blonder") . PHP_EOL;

function saludar()
{
    return 'hola mundo';
}
$saludo = saludar(...);

echo $saludo() . PHP_EOL;
