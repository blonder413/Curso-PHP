<?php
/**
 * Las clases abstractas no se pueden instanciar
 */
abstract class Persona
{
    public function saludar()
    {
        return 'hola mundo';
    }

    public static function mostrar_texto()
    {
        return 'hola';
    }
}

class Cliente extends Persona
{
    public function saludar()
    {
        /**
         * Podemos llamar los métodos padres aunque la clase padre sea abstracta
         */
        return parent::saludar();
    }
}

/**
 * Tratar de instanciar una clase abstracta genera un Fata error
 */
// $obj = new Persona;
/**
 * Al no poder instanciarse no se pueden llamar los métodos no estáticos de forma directa
 */
// echo Persona::saludar();
echo Persona::mostrar_texto();

$cliente = new Cliente;
echo $cliente->saludar();
