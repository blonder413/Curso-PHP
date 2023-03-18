<?php
$a = false and false;
$a = false && false;

// se asigna el valor de false a $a
$a = false or true;
// calcula false || true y asigna el resultado a $a
$a = false || true;

// xor toma el primer valor (true)
$a = true xor true;
// calcula y asigna el resultado a $a
$a = (true xor true);

$a = !false;

$a = (false and false || true);

echo $a;

var_dump($a);