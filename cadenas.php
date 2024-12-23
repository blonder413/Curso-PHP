<?php

/**
 * Es posible acceder a los índices de una cadena
 */

// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];
echo "the first character of a string: " . $first . PHP_EOL;

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str) - 1];
echo "the last character of a string: " . $last . PHP_EOL;


$string = 'string';
echo "The character at index -2 is $string[-2].", PHP_EOL;
$string[-3] = 'o';
echo "Changing the character at index -3 to o gives $string.", PHP_EOL;
