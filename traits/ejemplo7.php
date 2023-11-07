<?php

/**
 * Los traits soportan el uso de métodos abstractos para imponer requisitos a la clase a la que se exhiban.
 * Una clase concreta cumple este requisito definiendo un método concreto con el mismo nombre; 
 * su firma puede ser diferente.
 */

trait Hola
{
    public function decirHolaMundo()
    {
        echo 'Hola' . $this->obtenerMundo();
    }

    abstract public function obtenerMundo();
}

class MiHolaMundo
{
    private $mundo;
    use Hola;

    /**
     * Se debe reescribir el método porque el trait lo exige al ser abstracto
     * Su firma puede ser diferente
     */
    private function obtenerMundo()
    {
        return $this->mundo;
    }

    public function asignarMundo($val)
    {
        $this->mundo = $val;
    }
}

$obj = new MiHolaMundo();
$obj->asignarMundo('Mundo');
$obj->decirHolaMundo();
