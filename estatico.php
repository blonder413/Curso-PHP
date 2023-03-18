<?php
// https://www.php.net/manual/es/language.oop5.static.php

class Venta {
    static $descuento = 30;

    function getDescuento()
    {
        return self::$descuento;
    }
    function setDescuento($valor)
    {
        self::$descuento = $valor;
    }
}

$venta1 = new Venta();
$venta2 = new Venta();

echo $venta1::$descuento;

$venta2->setDescuento(50);

echo $venta1->getDescuento();
echo $venta2->getDescuento();