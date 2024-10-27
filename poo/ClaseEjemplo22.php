<?php

/**
 * Polimorfismo
 * El polimorfismo es la capacidad de un objeto de comportarse como la instancia de otro
 * En indispensable la herencia o la implementación de una interfaz para esto
 */
interface Figura
{
    public function area();
}

class Cuadrado implements Figura
{
    private $lado;
    public function __construct($lado)
    {
        $this->lado = $lado;
    }
    public function area()
    {
        return $this->lado * $this->lado;
    }
}

class Circulo implements Figura
{
    private $radio;
    public function __construct($radio)
    {
        $this->radio = $radio;
    }
    public function area()
    {
        return 2 * pi() * pow($this->radio, 2);
    }
}

class Triangulo
{
    private $base;
    private $altura;
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function area()
    {
        return $this->base * $this->altura / 2;
    }
}

class Geometria
{
    /**
     * Calcula el área de un objeto
     * @param Figura $objeto Recibe un objeto que implemente la clase figura
     * @return float Valor del área calculada
     */
    public function calcularArea(Figura $objeto)
    {
        return $objeto->area();
    }
}

$cuadrado = new Cuadrado(4);
$circulo = new Circulo(13);
$geo = new Geometria();
echo $geo->calcularArea($cuadrado);
echo "\n";
echo $geo->calcularArea($circulo);

$triangulo = new Triangulo(4, 13);
// Triángulo no puede llamar a calcularArea porque no implementa la interfaz figura
// echo $geo->calcularArea($triangulo);

// Podemos verificar si una clase es instancia de otra
// var_dump($cuadrado instanceof Object);
