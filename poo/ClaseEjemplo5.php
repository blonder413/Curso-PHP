<?php
/**
 * La visibilidad private de un atributo o método hace que solo sean accesibles desde la clase en la que se definieron
 */

class Padre
{
    private $nombre = 'clase padre';
}

class Hijo extends Padre
{
    private $edad = 413;

    /**
     * No es posible acceder a las variables privadas de la clase padre
     */
    public function __construct()
    {
        // parent::$nombre = $this->edad;
    }

    /**
     * Podemos acceder a los atributos y/o método privados dentro de la misma clase
     */
    public function get_edad()
    {
        return $this->edad;
    }
}

$padre = new Padre;
$hijo = new Hijo();
/**
 * Intentar llamar al atributo privado genera un error fatal
 */
// echo $padre->nombre;
// echo $hijo->edad;

/**
 * Para acceder al valor de un atributo privado debemos hacerlo a través de un atributo o método público
 */
echo $hijo->get_edad();
