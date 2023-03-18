<?php

$clientes = array(
    array('juan','pérez','juan@email.com'),
    array('laura','fernández','laura@email.com'),
);

$alumno = [
    ['juan', 2005],
    ['luis', 2006],
    ['ana', 2007],
    ['lina', 2008],
];

echo $alumno[2][0];

for ($i = 0; $i<count($alumno); $i++) {
    for ($j=0; $j < count( $alumno[$i] ); $j++) {
        echo $alumno[$i][$j] . ' '; 
    }
    echo '<br>';
}

foreach ($alumno as $value) {
    foreach ($value as $valor) {
        echo $valor . ' ';
    }
    echo '<br>';
}

$clientes = [
    ['nombre'   => 'juan', 'correo' => 'juan@email.com'],
    ['nombre'   => 'pedro', 'correo' => 'pedro@email.com'],
    ['nombre'   => 'ana', 'correo' => 'ana@email.com'],
    ['nombre'   => 'luisa', 'correo' => 'luisa@email.com'],
];

echo $clientes[0]['nombre'] . ' ' . $clientes[0]['correo'] . '<br>';

foreach ($clientes as $value) {
    echo $value['nombre'] . ' ' . $value['correo'] . '<br>';
}