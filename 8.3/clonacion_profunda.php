<?php

/**
 * Las propiedades readonly ahora pueden ser modificadas una vez dentro del método mágico __clone para permitir la
 * clonación profunda de propiedades de solo lectura.
 * https://www.php.net/manual/es/language.oop5.cloning.php
 */

class App
{
    public string $version = '0.2';
}

readonly class Info
{
    public string $nombre;
    public function __construct(public App $app) {
        $this->nombre = "info";
    }

    /**
     * Este método permite sobreescribir el atributo de la clase de solo lectura
     * sin este método todas las instancias tendría el mismo valor
     * solo permite clonar un objeto
     */
    public function __clone(): void
    {
        $this->app = clone $this->app;
    }
}

$info = new Info(new App);
// no es posible crear el atributo porque es de solo lectura
// $info->version = "1.0";

$info->app->version = "0.1";

$info2 = new Info(new App);
$info2->app->version = "0.2";

// clone me permite crear un duplicado para generar sus propios valores
// si no defino el método __clone en la clase, el objeto $info tomaría los mismos valores
$clon = clone $info;
$clon->app->version = "1.0";

/**
 * No puedo modificar la propiedad de una clase de solo lectura
 * si dicha propiedad no está definida en el  método mágico __clone
 */
$clon->nombre = "mi clon";

var_dump($info, $info2, $clon);
