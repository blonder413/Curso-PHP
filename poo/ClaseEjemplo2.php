<?php
class Ejemplo {
    public $nombre;
    /**
     * El constructor es llamado automáticamente al instanciarse la clase
     * Al ser un método puede recibir o no parámetros
     */
    /*
    public function __construct()
    {
        $this->nombre = 'blonder413';
    }
    */

    /**
     * En PHP no se pueden sobreescribir métodos auque tengan firma distinta
     * El término sobrecarga aplica en PHP para los método mágicos propios del lenguaje
     */
    public function __construct($nombre = '')
    {
        $this->nombre = $nombre;
    }
}

/**
 * Cuando el contructor recibe parámetros estos se envían directamente dentro de ()
 * Los atributos o propiedades pueden llamarse usando el operador ->
 */
// $obj = new Ejemplo();
$obj = new Ejemplo('blonder');
echo $obj->nombre;