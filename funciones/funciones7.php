<?php
/**
 * una función o método declarado con el tipo never
 * indica que no retornará un valor y lanzará excepción
 * o finalizará el script con die, exit, trigger_error o similares
 */

function salir(): never {
    echo "hola mundo" . PHP_EOL;
    exit(); // es obligatorio detenerlo para evitar el retorno implícito
}

// salir();

function excepcion(): never {
    throw new Exception('Error');
}

/*
try {
    excepcion();
} catch (Exception $e) {
    print_r($e);
}
*/

function redirect(string $uri): never {
    header('Location: ' . $uri);
    exit();
}
 
function redirectToLoginPage(): never {
    redirect('/login');
    echo 'Hello'; // <- dead code detected by static analysis (nunca se ejecuta)
}

redirectToLoginPage();