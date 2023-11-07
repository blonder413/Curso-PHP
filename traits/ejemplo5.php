<?php
trait HolaMundo
{
    public function decirHola()
    {
        echo 'Hola Mundo!';
    }
}

// Cambiamos visibilidad de decirHola
class MiClase1
{
    use HolaMundo {
        decirHola as protected;
    }
}

// Método alias con visibilidad cambiada
// La visibilidad de decirHola no cambia
class MiClase2
{
    use HolaMundo {
        decirHola as private miPrivadoHola;
    }

    public function saludar()
    {
        $this->miPrivadoHola();
    }
}

// $obj1 = new MiClase1();
// $obj1->decirHola();  // decirHola ahora es protected
$obj2 = new MiClase2();
$obj2->decirHola();
// $obj2->miPrivadoHola(); // miPrivadoHola es una copia de decirHola pero private
$obj2->saludar();
