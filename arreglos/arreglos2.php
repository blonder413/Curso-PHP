<?php
/**
 * Los arreglos asociativos se dintinguen por tener un nombre de una clave y un valor asociado
 * a diferencia de los arreglos simples cuyo índice es númerico empezando por cero
 */
$cliente = array(
    'nombre'    => 'juan',
    'apellido'  => 'pérez',
    'correo'    => 'juanperez@hotmail.com'
);

$proveedor = [
    'nombre'    => 'juan',
    'apellido'  => 'pérez',
    'correo'    => 'juanperez@hotmail.com'
];

echo $cliente['nombre'];

foreach($cliente as $value) {
    echo $value;
}

foreach ($proveedor as $key => $value) {
    echo $key . ' => ' . $value;
}