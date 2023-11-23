<?php
/**
 * Desde PHP 8.1 es posible definir tipos de datos octales con el prefijo 0o
 */
$falso = 0o16 === 16; // false — not confusing with explicit notation
$verdadero = 0o16 === 14; // true 
var_dump($falso, $verdadero);
