<?php
// print_r(openssl_get_cipher_methods());

$plaintext = "message to be encrypted";
$cipher = "aes-128-gcm";
$tag = "blonder413";

if (in_array($cipher, openssl_get_cipher_methods())) {
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $key = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options = 0, $iv, $tag);
    echo $ciphertext . "\n";
    //store $cipher, $iv, and $tag for decryption later
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options = 0, $iv, $tag);
    echo $original_plaintext . "\n";
}
