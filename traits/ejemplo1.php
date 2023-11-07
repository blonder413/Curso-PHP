<?php

/**
 * https://www.php.net/manual/es/language.oop5.traits.php
 * Los rasgos («traits» en inglés) son un mecanismo de reutilización de código en lenguajes de herencia simple.
 * No se puede instanciar directamente un Trait.
 * Habilita la composición horizontal de comportamientos; es decir, 
 * permite combinar miembros de clases sin tener que usar herencia
 * Desde 5.4.0 en adelante
 */

class Base
{
    public function decirHola()
    {
        echo '¡Hola ';
    }
}

trait DecirMundo
{
    /**
     * Los métodos del trait sobreescriben los métodos de la clase Base
     */
    public function decirHola()
    {
        parent::decirHola();
        echo 'Mundo!';
    }
}

class MiHolaMundo extends Base
{
    /**
     * Los métodos de la clase sobreescriben los métodos del trait
     */
    use DecirMundo;
}

$o = new MiHolaMundo();
$o->decirHola();
