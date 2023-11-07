<?php

/**
 * los Traits pueden hacer uso de otros Traits.
 * Al usar uno o más traits en la definición de un trait, éste puede componerse parcial 
 * o completamente de miembros definidos en esos otros traits.
 */

trait Hola
{
    public function decirHola()
    {
        echo 'Hola ';
    }
}

trait Mundo
{
    public function decirMundo()
    {
        echo 'Mundo!';
    }
}

trait HolaMundo
{
    use Hola, Mundo;
}

class MiHolaMundo
{
    use HolaMundo;
}

$o = new MiHolaMundo();
$o->decirHola();
$o->decirMundo();
