<?php
/**
 * Los atributos estáticos solo generan una dirección en memoria
 * esto quiere decir que todas las instancias compartirán el mismo valor
 */
class Persona
{
    public static $id = 0;
}

class Cliente extends Persona
{
    public function __construct()
    {
        self::$id++;
    }

    public function get_id()
    {
        return self::$id;
    }
}

/**
 * Los atributos estáticos no puede ser accedido como una instancia
 * debe ser accedido sin instanciar la clase
 */
echo Persona::$id;

$cliente1 = new Cliente;
$cliente2 = new Cliente;

/**
 * Esto genera un PHP Warning ya que el atributo $id es estático
 */
echo $cliente1->id;

/**
 * Como ambas instancias comparten el mismo espacio en memoria para el atributo id
 * el valor de dicho atributo es el mismo para ambos
 */
echo $cliente1->get_id();
echo $cliente2->get_id();


