<?php
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