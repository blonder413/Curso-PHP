<?php
/*
function incrementar($num1)
{
    return $num1++;
}

function incrementar($num1)
{
    return ++$num1;
}
*/

function incrementar(&$num1)
{
    return ++$num1;
}

$valor = 5;

//echo incrementar($valor);
//echo incrementar(4);
echo $valor;