<?php
/**
 * Para nombrar una clase se recomienda usar el estilo Pascal Case o Upper Camel Case
 * Es decir, cada inicial debe ir con mayúscula
 */
class Ejemplo {
    /**
     * El constructor es llamado automáticamente al instanciarse la clase
     */
    public function __construct()
    {
        echo 'Clase de ejemplo';
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