<?php
/**
 * A partir de PHP 8.1 es posible definir enum para validar tipos de datos
 * Pure Enums
 */
enum Status
{
    case Borrador;
    case Publicado;
    case Archivado;
}
function aceptarEstado(Status $status) {
    switch ($status) {
        case Status::Borrador:
            return "es un borrador";
            break;
        default:
            return "error";
    }
}

$status = Status::Publicado;
echo aceptarEstado($status);
