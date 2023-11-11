<?php
/**
 * Los método son funciones encapsuladas dentro de clases
 * Su definición es la misma, solo cambia la forma de llamarse
 */
class Ejemplo {
    /**
     * El constructor es llamado automáticamente al instanciarse la clase
     */
    public function __construct()
    {
        echo 'Clase de ejemplo';
    }

    public function imprimir()
    {
        return "hola mundo";
    }
}

/**
 * El constructor se ejecuta automáticamente al instanciar una clase
 * Por lo general las instancias se guardan en variables pero no es necesario
 * También se suele usar () para crear una instancia pero tampoco es necesario
 */
new Ejemplo;
new Ejemplo();
$obj = new Ejemplo();
echo $obj->imprimir();