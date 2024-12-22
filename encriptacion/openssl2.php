<?php

/**
 * https://www.php.net/manual/en/function.openssl-encrypt.php
 * métodos cyper: $method = "aes-256-cbc", "aes-128-gcm"
 */
// Create The First Key
// echo base64_encode(openssl_random_pseudo_bytes(32));

// Create The Second Key
// echo base64_encode(openssl_random_pseudo_bytes(64));

// --------------------------------------------------------
//  Obtiene los métodos de cifrado disponibles
// print_r(openssl_get_cipher_methods());
// --------------------------------------------------------
// Save The Keys In Your Configuration File
define('FIRSTKEY', 'Lk5Uz3slx3BrAghS1aaW5AYgWZRV0tIX5eI0yPchFz4=');
define('SECONDKEY', 'EZ44mFi3TlAey1b2w4Y7lVDuqO+SRxGXsa7nctnr/JmMrA2vN6EJhrvdVZbxaQs5jpSe34X3ejFK/o9+Y5c83w==');
// --------------------------------------------------------
function securedEncrypt($data)
{
    $first_key = base64_decode(FIRSTKEY);
    $second_key = base64_decode(SECONDKEY);

    $method = "aes-256-cbc";
    $iv_length = openssl_cipher_iv_length($method);
    $iv = openssl_random_pseudo_bytes($iv_length);

    $first_encrypted = openssl_encrypt($data, $method, $first_key, OPENSSL_RAW_DATA, $iv);
    $second_encrypted = hash_hmac('sha3-512', $first_encrypted, $second_key, true);

    return base64_encode($iv . $second_encrypted . $first_encrypted);
}
// --------------------------------------------------------
function securedDecrypt($input)
{
    $first_key = base64_decode(FIRSTKEY);
    $second_key = base64_decode(SECONDKEY);
    $mix = base64_decode($input);

    $method = "aes-256-cbc";
    $iv_length = openssl_cipher_iv_length($method);

    $iv = substr($mix, 0, $iv_length);
    $second_encrypted = substr($mix, $iv_length, 64);
    $first_encrypted = substr($mix, $iv_length + 64);

    $data = openssl_decrypt($first_encrypted, $method, $first_key, OPENSSL_RAW_DATA, $iv);
    $second_encrypted_new = hash_hmac('sha3-512', $first_encrypted, $second_key, true);

    if (hash_equals($second_encrypted, $second_encrypted_new)) {
        return $data;
    }

    return false;
}

$texto = securedEncrypt("Blonder413");
echo $texto . "\n";
echo securedDecrypt($texto) . "\n";

