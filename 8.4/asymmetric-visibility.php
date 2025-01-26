<?php
/**
 * Ahora es posible definir alcances de visibilidad de lectura y escritura diferentes
 */
class Venta
{
    // definimos la propiedad $iva pública de lectura pero privada de escritura
    public private(set) float $iva = 19;

    public function incrementar(): void
    {
        $this->iva++;
    }
}

$obj = new Venta();
echo $obj->iva;
$obj->incrementar();
echo $obj->iva;

// Fatal error: Uncaught Error: Cannot modify private(set) property 
// $obj->iva = 413;
