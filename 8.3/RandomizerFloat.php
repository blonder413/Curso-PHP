<?php

$randomizer = new \Random\Randomizer();

$temperatura = $randomizer->getFloat(
    -1.2,
    1.2,
    \Random\IntervalBoundary::ClosedClosed,
);
var_dump($temperatura);

$chanceForTrue = 0.1;
// Randomizer::nextFloat() is equivalent to
// Randomizer::getFloat(0, 1, \Random\IntervalBoundary::ClosedOpen).
// The upper bound, i.e. 1, will not be returned.
$numero = $randomizer->nextFloat();
$myBoolean = $numero < $chanceForTrue;

var_dump($numero, $myBoolean);
