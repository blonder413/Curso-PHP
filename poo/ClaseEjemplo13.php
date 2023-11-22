<?php
/**
 * las propiedades de solo lectura se introducen en PHP 8.1
 * Oblitatoriamente se debe inicializar y definir un tipo de dato
 * Si no se inicializa arroja un Fata Error
 * No pueden tener valor por defecto, por lo que debe inicializarse desde el constructor
 */
class Persona
{
    public readonly Int $id;

    public function __construct(Int $id)
    {
        $this->id = $id;
    }
}

// $obj = new Persona();
$obj = new Persona(413);
// $obj->id = 1;
echo $obj->id . PHP_EOL;
