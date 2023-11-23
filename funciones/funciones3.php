<?php
/**
 * Se puede definir el tipo de retorno que tendrá la función o método
 * int      -> entero
 * float    -> flotante (decimal)
 * string   -> cadena de texto
 * bool     -> boolean (true/false)
 */

function sumar($num1, $num2): int {
    return $num1 . $num2;
}

function sumar2($num1, $num2): float {
    return $num1 . $num2;
}

function saludar(): string {
    return "hola mundo" . PHP_EOL;
}

function confirmar(): bool {
    return true;
}

echo sumar(4.13, 13) . PHP_EOL;
var_dump(sumar(4,13));
echo saludar();
var_dump(confirmar());
