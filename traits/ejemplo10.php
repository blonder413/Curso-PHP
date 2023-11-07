<?php

/**
 * Los traits también pueden definir propiedades. 
 */

trait PropiedadesTrait
{
    public $x = 1;
}

class EjemploPropiedades
{
    use PropiedadesTrait;
}

$ejemplo = new EjemploPropiedades;
echo $ejemplo->x;
$ejemplo->x = 413;
echo $ejemplo->x;

$ejemplo2 = new EjemploPropiedades;
echo $ejemplo2->x;
