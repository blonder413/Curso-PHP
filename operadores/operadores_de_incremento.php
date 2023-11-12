<?php
$a = 4;
$b = 13;

$a = $a + $b;
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;

$a = $b++;
$a = ++$b;

$a .= $b;

$texto = 'esto';
$texto .= ' es';
$texto .= ' un';
$texto .= ' texto';
$texto .= '.';
echo $a . $texto;