<?php

/**
 * Resolución de conflictos
 * Si dos Traits insertan un método con el mismo nombre, se produce un error fatal, 
 * siempre y cuando no se haya resuelto explicitamente el conflicto. 
 */

trait A
{
    public function smallTalk()
    {
        echo 'a';
    }
    public function bigTalk()
    {
        echo 'A';
    }
}

trait B
{
    public function smallTalk()
    {
        echo 'b';
    }
    public function bigTalk()
    {
        echo 'B';
    }
}

class Conflicto
{
    use A, B;
}

class Talker
{
    use A, B {
        B::smallTalk insteadof A;   // se usa el método smallTalk de trait B
        A::bigTalk insteadof B; // se usa el método bigTalk de trait A
    }
}

class Aliased_Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        // usar as no renombra el método
        B::bigTalk as talk; // permite usar el método bigTalk de B gracias al alias
    }
}

/*
$obj = new Conflicto();
$obj->smallTalk();  // genera un Fatal error
*/

$obj = new Aliased_Talker();
$obj->smallTalk();
$obj->bigTalk();
$obj->talk();
