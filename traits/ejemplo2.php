<?php
trait HolaMundo
{
    public function decirHola()
    {
        echo '¡Hola Mundo!';
    }
}

class ElMundoNoEsSuficiente
{
    use HolaMundo;
    /**
     * El método de la clase sobreescribe el trait
     */
    public function decirHola()
    {
        echo '¡Hola Universo!';
    }
}

$o = new ElMundoNoEsSuficiente();
$o->decirHola();
