<?php
/**
 * Los métodos estáticos pueden ser llamados sin tener que instanciar la clase
 */
class Persona
{
    public static function saludar()
    {
        return 'hola mundo';
    }
}

echo Persona::saludar();

$persona = new Persona;
echo $persona->saludar();
