<?php

/**
 * Los trait pueden definir miembros y métodos estáticos. 
 */

trait Contador
{
    public function inc()
    {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class Clase1
{
    use Contador;
}

class Clase2
{
    use Contador;
}

$o1 = new Clase1();
$o1->inc(); // echo 1

$o2 = new Clase1();
$o2->inc(); // echo 2

$p = new Clase2();
$p->inc(); // echo 1