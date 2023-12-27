<?php
/**
 * Cuando deseamos asignar un valor a una variable que dependa de algo, 
 * hacerlo en la misma línea resulta más cómodo, para eso podemos usar los operadores ?...: y ??
 */

$a = null;

if (is_null($a)) {
    $c = 0;
} else {
    $c = $a;
}

/**
 * Ternary Operator
 * El condicional anterior se puede resumir en una línea
 * condición ? valor si se cumple la condición : valor si no se cumple la condición
 */
$c = is_null($a) ? 0 : $a;
echo $c;

/**
 * El 0 lo toma como falso por lo tanto evalúa la siguiente expresión
 * así continúa hasta que encuentre un valor válido
 */
echo 0 ?: 1 ?: 2 ?: 3, PHP_EOL; //1
echo 0 ?: 0 ?: 2 ?: 3, PHP_EOL; //2
echo 0 ?: 0 ?: 0 ?: 3, PHP_EOL; //3

/**
 * Null Coalescing Operator
 * El operador ?? valida si el primero valor es null
 * si es falso asigna el primer valor, si no asigna el siguiente
 * Es un operador de comparación muy útil para validar si un valor es null
 */
$c = $a ?? 0;
echo $c;