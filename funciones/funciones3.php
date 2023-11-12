<?php
/**
 * Se pueden pasar parámetros por referencia anteponiendo & al nombre de la variable
 * Al hacer esto la variable fuera de la función será afectada por la de la función
 * Esto no es algo que se suela usar por el peligro que conlleva modificar datos
 * fuera del contexto de la función
 */

/*
function incrementar1($num1)
{
    return $num1++;
}

function incrementar2($num1)
{
    return ++$num1;
}
*/

function incrementar3(&$num1)
{
    return ++$num1;
}

$valor = 5;

//echo incrementar($valor);
//echo incrementar(4);
echo $valor;


function incrementar4(&$var)
{
    $var++;
}

$a = 5;
/**
 * Al pasar la variable $a a la función esta queda referenciada por $var,
 * es decir, cualquier cambio que sufra $var dentro de la función afectará a la variable $a
 */
incrementar4($a);
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