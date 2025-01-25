<?php

/**
 * pseudotipo iterable
 * desde PHP 7.1
 * https://www.php.net/manual/es/class.iteratoraggregate.php
 * https://www.php.net/manual/es/class.traversable.php
 * https://www.php.net/manual/es/class.iterator.php
 */
function iterator(iterable $iter)
{
    foreach ($iter as $val) {
        echo $val . " | ";
    }
}

$nombre = "jill";
// Fatal error: Uncaught TypeError: iterator()
// iterator($nombre);

iterator([1, 2, 3]);


class MyData implements IteratorAggregate
{
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";
    public $property4 = "";

    public function __construct()
    {
        $this->property4 = "last property";
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this);
    }
}

$obj = new myData;

foreach ($obj as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}

iterator($obj);
