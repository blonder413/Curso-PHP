<?php

/**
 * Dynamic class constant fetch
 * usando {} podemos buscar el valor de una constante, esto permite recibir el valor de la constante de forma dinámica
 */
class Foo
{
    const PHP = 'PHP 8.3';
}

$searchableConstant = 'PHP';

var_dump(Foo::{$searchableConstant});
