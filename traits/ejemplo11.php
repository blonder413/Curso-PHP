<?php

/**
 * Si un trait define una propiedad, una clase no puede definir una propiedad con el mismo nombre, 
 * a menos que sea compatible (misma visibilidad y mismo valor inicial)
 */

trait PropiedadesTrait
{
    public $misma = true;
    public $diferente = false;
}

class EjemploPropiedades
{
    use PropiedadesTrait;
    public $misma = true; // Permitido a partir de PHP 7.0.0; aviso E_STRICT anteriormente
    public $diferente = true; // Error fatal
}
