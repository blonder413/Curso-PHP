<?php
trait EjemploEstatico
{
    public static function hacerAlgo()
    {
        return 'Hacer algo';
    }
}

class Ejemplo
{
    use EjemploEstatico;
}

echo Ejemplo::hacerAlgo();
