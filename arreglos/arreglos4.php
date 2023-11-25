<?php
/**
 * unpacking
 * Desde PHP 8.1 es posible hacer unpacking para arreglos asociativos
 * Los ... es obligatorio para hacer el unpacking
 */
$arr1 = [1, 2, 3];
$arr2 = [...$arr1]; //[1, 2, 3]
$arr3 = [0, ...$arr1]; //[0, 1, 2, 3]

print_r($arr1) . PHP_EOL;
print_r($arr2) . PHP_EOL;
print_r($arr3) . PHP_EOL;

$arr4 = [$arr1];    // [[1, 2, 3]]
print_r($arr4) . PHP_EOL;

$arrayA = ['a' => 1];
$arrayB = ['b' => 2];

// en este caso el valor de a se reemplaza
$result = ['a' => 0, ...$arrayA, ...$arrayB];
print_r($result) . PHP_EOL;

// los valores a la derecha reemplazan a cualquier valor igual a su izquierda
$result2 = [...$arrayA, ...$arrayB, 'a' => 0];
print_r($result2) . PHP_EOL;
