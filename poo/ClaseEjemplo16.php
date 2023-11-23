<?php
/**
 * Es posible declarar constantes finales en clases, de tal manera que no podrán ser sobreescritas
 * en clases hijas
 */
class Factura {
    final public const IVA = 19;
}

class Venta extends Factura {
    // Esto genera un Fatal error
    public const IVA = 16;
}
