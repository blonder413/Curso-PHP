<?php
//  https://www.youtube.com/watch?v=NOoUGXlURms&t=732s
// https://www.php.net/manual/es/language.oop5.magic.php

class Cliente {

    function __get($atributo)
    {
        //return $this->$atributo;
        echo 'El atributo ' . $atributo . ' no existe';
    }

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

}

$cliente = new Cliente();
//$cliente->nombre = "blonder";

echo $cliente->blog;