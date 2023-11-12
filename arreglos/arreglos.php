<?php
/**
 * https://www.php.net/manual/es/ref.array.php
 */
$alumnos = array();

$alumnos[] = 'maría';
$alumnos[] = 'ana';
$alumnos[2] = 'rogelio';

$profesores = array('juan', 'pedro', 'luisa');

$padres = ['gloria', 'andrea', ' javier'];


echo $alumnos[0];

$estudiante = [
    'nombre'    => 'juan',
    'apellido'  => 'pérez',
    'estatura'  => 1.60,
];

echo $estudiante['estatura'];

print_r($estudiante);

var_dump($estudiante);

for ($i=0; $i<3; $i++) {
    echo $profesores[$i];
}

// sizeof es un alias de count
for ( $i=0; $i<sizeof($alumnos); $i++ ) {
    echo $alumnos[$i];
}

for ( $i=0; $i<count($alumnos); $i++ ) {
    echo $alumnos[$i];
}

$cont = 0;
while($cont < count($alumnos)) {
    echo $alumnos[$cont];
    $cont++;
}