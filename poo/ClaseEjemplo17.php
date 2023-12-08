<?php
/**
 * A partir de PHP 8.2 se pueden crear clases de solo lectura
 * Las clases de solo lectura solo pueden ser heredadas por otras clases de solo lectura
 */
readonly class Constantes
{
    public string $title;
    public const PI = 3.1416;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}

/**
 * Las clases readonly se pueden heredar por otras clases readonly
 */
readonly class Variables extends Constantes {

}


$obj = new Constantes('prueba');
// no es posible modificar un atributo de una clase de solo lectura
// $obj->title = 'nuevo título';
echo $obj->title . PHP_EOL;
echo $obj::PI . PHP_EOL;
