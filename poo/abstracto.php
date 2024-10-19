<?php
abstract class Mensaje {
    static function saludar()
    {
        return 'hola mundo';
    }

    // debería ser static
    function despedir()
    {
        return 'adiós mundo';
    }
}

echo Mensaje::saludar();
echo Mensaje::despedir();