<?php
/**
 * Las propiedades y métodos de un objeto recién instanciado ahora se pueden acceder sin envolver la expresión new
 * entre paréntesis.
 */
class PhpVersion
{
    public function getVersion(): string
    {
        return 'PHP 8.4';
    }
}

// Antes
var_dump((new PhpVersion())->getVersion());

// Ahora
var_dump(new PhpVersion()->getVersion());
