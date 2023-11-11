<?php
/**
 * La herencia permite que una clase comparta sus atributos y/o métodos
 * Como en la mayoría de los lenguajes, PHP solo permite heredar de una clase, 
 * esto para evitar conflictos y confusiones
 */

class Padre {
    public $nombre;
    
    /**
     * Al declarar un método constructor con un parámetro este deberá se sobreescrito por las clases hijas
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}

/**
 * Para heredar una clase se debe usar la palabra extends
 * Si la clase padre está en otro archivo primero debe importarse
 */
class Hijo extends Padre {

    /**
     * Opcionalmente podemos llamar de forma explícita el constructor de la clase padre
     * Para eso usamos la palabra función parent
     */
    public function __construct()
    {
        parent::__construct('blonder');
    }
}

/**
 * Instanciar la clase hijo sin pasarle el argumento requerido por el constructor de la clase padre
 * genera un Fatal error, lo que detendría la ejecución de la aplicación
 */
// $obj = new Hijo;

/**
 * Aunque la clase Hijo no tenga un constructor, por defecta llamará al constructor de su clase padre
 * El constructor de la clase Hijo podría recibir más parámetros y realizar operaciones adicionales
 */
$obj = new Hijo('blonder413');

/**
 * Aunque no existe un atributo llamado nombre dentro de la clase Hijo
 * se puede acceder a este gracias a que la clase padre sí lo posee
 */
echo $obj->nombre;