<?php
/**
 * A partir de PHP 8.1 es posible definir enum para validar tipos de datos
 * Estos datos pueden tener valores por defecto si se define el tipo del enum
 * Backed Enums
 */
enum Notas: string
{
    case E = 'Excelente';
    case A = 'Aceptable';
    case I = 'Insuficiente';
}

print(Notas::E->value);
