<?php

/**
 * Desestructuración de arrays simétricos
 */
$datos = [
    [1, "jill"],
    [2, "claire"]
];

/**
 * no podemos asignar arreglos al desestructurar
 * genera Warning: Array to string conversion
 * list($id, $nombre) = $datos;
 */
list($id, $nombre) = $datos[0];

echo $id . ": " . $nombre . PHP_EOL;

// También podemos usar la sintaxis abreviada de arreglos ([])
[$id, $nombre] = $datos[1];
echo $id . ": " . $nombre . PHP_EOL;

// También se puede aplicar dentro del foreach

// forma clásica
echo "Primera forma clásica" . PHP_EOL;
foreach ($datos as $value) {
    foreach ($value as $dato) {
        echo $dato;
        if (is_numeric($dato)) {
            echo ": ";
        }
    }
    echo PHP_EOL;
}
echo "Segunda forma clásica" . PHP_EOL;
foreach ($datos as $value) {
    foreach ($value as $key => $dato) {
        echo $dato;
        if ($key === 0) {
            echo ": ";
        }
    }
    echo PHP_EOL;
}

// forma desestructurada
echo "Primera forma desestructurada" . PHP_EOL;
foreach ($datos as list($id, $nombre)) {
    echo $id . ": " . $nombre . PHP_EOL;
}

echo "Segunda forma desestructurada" . PHP_EOL;
foreach ($datos as [$id, $nombre]) {
    echo $id . ": " . $nombre . PHP_EOL;
}
