<?php
/**
 * Objetos pueden ser usados como valores por defectos en parámetros, variables estáticas, constantes globales y 
 * argumentos. Esto hace posible tener atributos anidados
 */
class PersonaPrueba
{
    public $nombre;
}

class Cliente
{
    public PersonaPrueba $persona;

    public function __construct(PersonaPrueba $persona = new PersonaPrueba())
    {
        $this->persona = $persona;
    }
}

$persona = new PersonaPrueba;
$persona->nombre = 'jill';
echo $persona->nombre . PHP_EOL;

$cliente = new Cliente($persona);
echo $cliente->persona->nombre . PHP_EOL;
