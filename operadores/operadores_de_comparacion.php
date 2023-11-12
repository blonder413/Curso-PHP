<?php
/**
 * https://www.php.net/manual/es/language.operators.comparison.php
 * Los operadores de comparación son operadores binarios, es decir comparan dos valores
 */
/*
==      Igua a (compara valor)
===     Idéntico a (compara valor y tipo)
!=      Distinto (son diferentes en valor sin importar el tipo)
<>      Distinto
!==     No idéntico (No son iguales en valor y tipo)
<       Menor que
<=      Menor o igual que
>       Mayor que
>=      Mayor o igual que
<=>     Nave espacial
*/

// $a = null;
// $b = 13;
// $c = null;

/**
 * -1 si el de la izquierda es mayor
 * 0 si son iguales
 * 1 si el de la derecha es mayor
 */
// echo $a <=> $b;

/**
 * El primer valor de izquierda a derecha que exista y no sea null
 * Si no hay valores definidos o son null devuelve null
 * El último debe estar definido o genera un PHP Warning
 */
echo $a ?? $b ?? $c;