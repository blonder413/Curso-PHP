<?php
/**
 * Se agregan nuevas funciones de arreglos a las ya existes
 * https://www.php.net/manual/es/ref.array.php
 * https://www.php.net/manual/es/function.array-all.php
 * https://www.php.net/manual/es/function.array-any.php
 * https://www.php.net/manual/es/function.array-filter.php
 * https://www.php.net/manual/es/function.array-reduce.php
 * https://www.php.net/manual/es/function.array-walk.php
 */
$animales = ['perro', 'gato', 'vaca', 'pato', 'ganzo', 'lobo'];

/**
 * Devuelve el primer elemento que satisfaga una función callback
 */
$animal = array_find(
    $animales,
    static fn(string $value): bool => str_starts_with($value, 'p'),
);

var_dump($animal); // string(5) "perro"

echo "<br>";

$nombres = [
    "b" => "barry",
    "c" => "claire",
    "j" => "jill",
    "l" => "leon",
    "m" => "moira",
];
// Encuentra el primer elemento que el índice inicie con las letras de la "a" a la "l"
var_dump(array_find($nombres, function ($value, $key) {
    return preg_match('/^([a-l])$/', $key);
}));

echo "<br>";

// encuentra la llave del primer elemento con un nombre de más de 5 caracteres de largo
var_dump(array_find_key($nombres, function (string $value) {
    return strlen($value) > 5;
}));