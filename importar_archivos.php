<?php
/**
 * Existen distintas formas de importar archivos PHP
 * require
 * require_once
 * include
 * include_once
 * Los require generan un Fatal error si no se encuentra el archivo
 * Los include generan un warning si no se encuentra el archivo 
 * Los sufijos once evita que se incluyan más de una vez
 */

// require 'cuadro.php';
// require_once 'cuadro.php';
include 'cuadro.php';
include_once 'cuadro.php';

/**
 * Si el archivo se encuentra dentro de una carpeta podemos llamar a ruta
 */
require_once 'models/Cliente.php';

/**
 * También podemos ir a directorios superiores usando ../
 */
require_once '../config/db.php';