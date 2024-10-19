<?php
/*
 * https://www.php.net/manual/es/function.crypt
 * Crypt (PHP 4, PHP 5, PHP 7)
 * base64_encode (PHP 4, PHP 5, PHP 7)
 * random_bytes (PHP 7)
 * openssl_random_pseudo_bytes (PHP 5 >= 5.3.0, PHP 7)
 * hash_equals (PHP 5 >= 5.6.0, PHP 7)
 */

//$hashed_password = crypt('mypassword'); // dejar que el salt se genera automáticamente

//$salt = base64_encode(random_bytes(16));
$salt = base64_encode(openssl_random_pseudo_bytes(16));

$hashed_password = crypt('mypassword', $salt);

$user_input = 'mypassword';

echo $hashed_password;

/* Se deben pasar todos los resultados de crypt() como el salt para la comparación de una
   contraseña, para evitar problemas cuando diferentes algoritmos hash son utilizados. (Como
   se dice arriba, el hash estándar basado en DES utiliza un salt de 2 
   caracteres, pero el hash basado en MD5 utiliza 12.) */
if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
   echo "¡Contraseña verificada!";
} else {
    echo "¡Contraseña inválida!";
}