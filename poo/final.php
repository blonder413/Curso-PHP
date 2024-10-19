<?php
class Persona {
    protected $nombre;
    // solo para métodos
    final function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

class Cliente extends Persona{
/*
    function setNombre() {
        $this->nombre = 'blonder';
    }
*/
/*
    function setNombre($nombre) {
        $this->nombre = 'juan';
    }
*/
    function getNombre()
    {
        return $this->nombre;
    }
}

$cliente = new Cliente();
$cliente->setNombre('blonder');
echo $cliente->getNombre();
