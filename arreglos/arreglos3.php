<?php
/**
 * Los arreglos contienen más de un valor
 * pueden contener cualquier tipo de dato incluyendo otros arreglos
 * a los arreglos que contienen otros arreglos se les conoce como arreglos multidimensionales
 */

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

/**
 * Para acceder al valor de un arreglo de múltiples dimensiones se deben usar [] para cada dimensión
 * $alumno[2] contendría el arreglo ['ana', 2007]
 * así que para acceder a un valor concreto se debe agregar el índice de dicho arreglo
 */
echo $alumno[2][0];

/**
 * Para recorrer un arreglo, es decir pasar por cada uno de sus valores debemos conocer su tamaño
 * la función count (o su alias sizeof) permite conocer el tamaño
 * Para recorrer un arreglo de múltiples dimensiones se deben anidar ciclos por cada dimensión
 */
for ($i = 0; $i<count($alumno); $i++) {
    for ($j=0; $j < count( $alumno[$i] ); $j++) {
        echo $alumno[$i][$j] . ' '; 
    }
    echo '<br>';
}

/**
 * El cicho foreach permite recorrer el arreglo sin tener que identificar la cantidad de índices
 */
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

/**
 * foreach cuenta con el formato $key => $value donde $key devuelve el índice que está recorriendo
 * $key es útil cuando además del valor queremos manipular el índice
 */
foreach ($clientes as $key => $value) {
    echo $key . ': ' . $value['nombre'] . ' ' . $value['correo'] . '<br>';
}