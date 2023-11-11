<?php
for ($i = 0; $i < 5; $i++) {
    echo $i . ' ';
}

/*
 * Se debe ver arreglos y funciones antes de este tema
 * la función sizeof es un alias para count
 */

$datos = [1,2,3,4,5];
for ($i = 0; $i < count($datos); $i++) {
    echo $datos[$i];
}

// acceder a un índice que no existe genera un warning
echo $datos[5];
echo 'fin del código';  // el warning no evita que se ejecute lo siguiente
