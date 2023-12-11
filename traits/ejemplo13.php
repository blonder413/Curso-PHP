<?php

/**
 * A partir de PHP 8.2
 * es posible crear constantes en traits
 * es posible acceder a las constantes de los traits a través de las clases pero no directamente
 */
trait Numero
{
    public const PI = 3.1416;
}

class Calculadora
{
    use Numero;
}

var_dump(Calculadora::PI); // float(3.1416)
// var_dump(Numero::PI); // PHP Fatal error
