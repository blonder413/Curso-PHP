<?php
/**
 * https://www.php.net/manual/es/function.md5.php
 * md5 encripta en un solo sentido, en teoría no se puede obtener el valor original
 * pero existen muchas webs que permiten desencriptar md5 por lo que ya no se recomienda su uso para contraseñas
 * https://www.php.net/manual/es/faq.passwords.php#faq.passwords.fasthash
 */
$original="blonder413";
$codificado=md5($original);
print "original: $original\n";
print "codificado: $codificado";
