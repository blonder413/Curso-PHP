<?php
/**
 * https://www.php.net/manual/es/function.sha1.php
 * Permite crear un hash (No recomendado actualmente)
 * https://www.php.net/manual/es/faq.passwords.php#faq.passwords.fasthash
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)
 */
$str="blonder413";
$encriptado=sha1($str);
echo $encriptado;
