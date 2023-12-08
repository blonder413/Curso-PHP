<?php
/**
 * A Partir de PHP 8.2
 * Disjunctive Normal Form (DNF) Types
 * Permite combinar tipos de unión e intersección
 * Cuando se combinan los tipo intersección deben agruparse entre paréntesis
 */

class Persona {}

class Cliente extends Persona {}

class Mensaje {
    /**
     * Valida al menos un parámetro de tipo Cliente y Persona o null
     * @param Cliente&Persona|null $nombre Instancia de la clase Cliente o null
     */
    public function saludar((Cliente&Persona)|null $nombre) {
        return $nombre;
    }
}


$mensaje = new Mensaje;
$cliente = new Cliente;
var_dump($mensaje->saludar($cliente));
