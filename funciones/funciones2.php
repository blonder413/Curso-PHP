<?php
/**
 * Las funciones pueden recibir parámetros, esto es, variables que funcionarán de manera local
 */
function imprimir($texto)
{
    return $texto;
}

/**
 * Cuando se llama una función que recibe parámetros estos deben ponerse entre ()
 */
imprimir('hola mundo');


/**
 * Las funciones pueden definir parámetros por defecto para sus parámetros
 */
function saludar($nombre = 'blonder413')
{
    return $nombre;
}

/**
 * no es necesario pasar argumentos a una función si esta le asigna un valor por defecto
 */
saludar();
saludar('blonder');


/**
 * Cuando una función define varios parámetros algunos de ellos pueden ser opcionales
 * Para definir parámetros opcionales se deben establecer de derecha a izquierda,
 * es decir, los oblitarorios deben estar en primer orden
 */
function sumar($valor1, $valor2 = 0)
{
    return $valor1 + $valor2;
}

/**
 * Al llamar al método sumar, el valor2 es opcional
 * no es posible definir la función con el valor1 inicial y el 2 obligatorios
 */
sumar(1);
sumar(4,13);

/**
 * Las variables definidas en las funciones son locales,
 * es decir, no afectan variables fuera de ellas
 * Para nombrar una función puede usarse lower camel case o snake case
 * snake case: responder_nombre
 * lower camel case: responderNombre
 * upper camel case: ResponderNombre
 */
$texto = 'hola mundo';
function responderNombre($texto = 'hola blonder413')
{
    return $texto;
}

echo responderNombre('mi texto');
echo $texto;


