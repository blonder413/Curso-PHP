<?php

/**
 * Al agregar el atributo #[\Override] a un método PHP asegurará que un método con el mismo nombre exista en una clase
 * padre o en una interfaz implementada. Agregar el atributo aclara que la sobreescritura de un método padre es
 * intencional y simplifica la refactorización, porque la eliminación de un método padre sobreescrito será detectada.
 */

class Dato
{
    protected function getDato()
    {
        print "obtiene el dato";
    }
}

interface Validacion {
    public function validarDato();
}

class DatoPersona extends Dato implements Validacion
{
    /**
     * sobreescribo el método de la clase persona.
     * Si se borra el método de la clase padre genera un PHP Fatal error
     */
    #[\Override]
    public function getDato()
    {
        print "obtiene el dato";
    }

    /**
     * sobreescribo el método de la interfaz Validación
     * Si se borra el método de la interfaz genera un Fatal error
     */
    #[\Override]
    public function validarDato()
    {
        print "Se valida que el dato esté correcto";
    }
}
