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


/**
 * Se pueden pasar parámetros por referencia anteponiendo & al nombre de la variable
 * Al hacer esto la variable fuera de la función será afectada por la de la función
 * Esto no es algo que se suela usar por el peligro que conlleva modificar datos
 * fuera del contexto de la función
 */
function incrementar(&$var)
{
    $var++;
}

$a = 5;
/**
 * Al pasar la variable $a a la función esta queda referenciada por $var,
 * es decir, cualquier cambio que sufra $var dentro de la función afectará a la variable $a
 */
incrementar($a);
echo $a;


/*
 * Si deseamos modificar alguna variable lo recomendable es hacerlo de forma explícita
 */
function sumar_uno($variable)
{
    return $variable = $variable + 1;
}

$numero = sumar_uno(1);
echo $numero;