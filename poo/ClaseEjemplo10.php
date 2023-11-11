<?php
/**
 * Las constantes son valores que no pueden cambiar una vez definidas
 * Las constantes se pueden definir dentro o fuera de una clase pero se definen de forma distinta
 */
define('NOMBRE', 'blonder413');

/**
 * Intentar reasignar un valor a una constante generar un PHP Warning
 */
//define('NOMBRE', 'blonder');
echo NOMBRE;

abstract class Ejemplo {
    public const NOMBRE = 'blonder';
}

echo Ejemplo::NOMBRE;

class Ejemplo2 {
    public const NOMBRE = 'blonder constante';
}
$obj = new Ejemplo2;
echo $obj::NOMBRE;
