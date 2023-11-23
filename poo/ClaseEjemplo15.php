<?php
/**
 * Pure Intersection Types (8.1)
 * Es posible validar varios tipos de datos para un argumento de un método
 * Estos tipos de datos tienen que ser interfaces o clases, no se pueden usar tipos de datos nativos
 */
interface Acumulador{
}
interface Contador{
}

Class Calculadora implements Acumulador, Contador
{
    public $valor;
    public function __construct(Int $valor)
    {
        $this->valor = $valor;
    }
}

Class Calculadora2 implements Acumulador
{
    public $valor;
    public function __construct(Int $valor)
    {
        $this->valor = $valor;
    }
}

function acumular(Acumulador&Contador $valor) {
    return $valor;
}
$c = new Calculadora(413);
echo acumular($c)->valor;
$c2 = new Calculadora2(413);
// Fatal error porque Calculadora2 no implemente las dos interfaces necesarias
echo acumular($c2)->valor;
