<?php
class Persona
{
    protected $id = 0;

    public function get_id()
    {
        return $this->id;
    }

    protected function saludar()
    {
        return 'hola mundo';
    }
}

class Cliente extends Persona
{
    public $id;

    public function __construct()
    {
        $this->id++;
    }

    public function saludar()
    {
        return parent::saludar();
    }
}

$cliente1 = new Cliente;
echo $cliente1->id;
echo $cliente1->saludar();

$persona = new Persona;
/**
 * Los atributos y métodos protected solo pueden ser accedidos desde la misma clase
 * o desde la clases que la hereden.
 * Intentar acceder a ellos genera un PHP Fatal error
 */
// echo $persona->id;
// echo $persona->saludar();
echo $persona->get_id();