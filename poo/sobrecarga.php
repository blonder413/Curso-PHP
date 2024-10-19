<?php
//  https://www.youtube.com/watch?v=NOoUGXlURms&t=732s
// https://www.php.net/manual/es/language.oop5.magic.php

class Cliente {

    private $nombre = 'jonathan';
    public $nick = 'blonder413';

    /**
     * Este método es invocado por var_dump() al volcar un objeto para obtener las propiedades que deberían mostrarse. 
     * Si el método no está definido se mostrarán todas las propiedades públicas, protegidas y privadas.
     */
    public function __debugInfo() {
        return [
            'nick' => $this->nick,
        ];
    }
    
    /**
     * Es llamado cuando se intenta acceder a un atributo que no existe
     */
    function __get($atributo)
    {
        //return $this->$atributo;
        echo 'El atributo ' . $atributo . ' no existe';
    }

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    
    /**
     * Es llamado cuando se imprime la clase directamente
     */
    public function __toString()
    {
        return 'hola, soy una clase';
    }
    
    /**
     * Es llamado cuando se intenta llamar una instancia como si fuera un método
     */
    public function __invoke($x)
    {
        return('esto no es un método, es un objeto');
    }

}

$cliente = new Cliente();
//$cliente->nombre = "blonder";
echo $cliente(5);
echo $cliente->blog;
echo $cliente;
var_dump($cliente);
