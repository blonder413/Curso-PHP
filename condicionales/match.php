<?php

function fromLength(int $cm): string
{
    return match (true) {
        $cm < 50 => 'pequeño',
        $cm < 100 => 'mediano',
        default => 'grande',
    };
}

var_dump(fromLength(300));

$edad = 13;
$validar = match (true) {
    $edad < 10 => 'niño',
    $edad < 18 => 'adolescente',
    $edad < 50 => 'joven',
    default => 'anciano'
};
echo $validar;
