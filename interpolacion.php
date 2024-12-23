<?php

/**
 * Interpolación
 * https://www.php.net/manual/en/language.types.string.php#language.types.string.parsing
 */
// básica

$juice = "apple";

echo "He drank some $juice juice." . PHP_EOL;


const foo = 'bar';
$foo = 'foo';
$bar = 'bar';

// obsoleto en php 8.2
var_dump("${foo}");
var_dump("${(foo)}");


// Advanced (curly) syntax

$great = 'fantastic';
// Won't work, outputs: This is { fantastic}
echo "This is { $great}" . PHP_EOL;

// Works, outputs: This is fantastic
echo "This is {$great}" . PHP_EOL;
