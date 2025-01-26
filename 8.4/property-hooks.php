<?php
/**
 * permiten un preprocesamiento o postprocesamiento fiable de los valores,
 * sin necesidad de usar getter o setter
 */

class Persona {
    public string $nombre
    {
        set(string $nombre){
            $this->nombre = strtoupper($nombre);
        }
    }

    public string $apellido;

    public string $nombreCompleto
    {
        get => \sprintf("%s %s", $this->nombre, $this->apellido);
        set(string $value) {
            [$this->nombre, $this->apellido] = explode(" ", $value, 2);
        }
    }

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
}

$persona = new Persona("jill", "valentine");
echo $persona->nombre;
echo "<br>";
echo $persona->nombreCompleto;

$persona->nombreCompleto = "claire redfield";
echo "<br>";
echo $persona->nombre . " " . $persona->apellido;
