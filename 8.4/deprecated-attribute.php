<?php
/**
 * El atributo #[\Deprecated] permite usar el mecanismo de obsolescencia existente de PHP para funciones,
 * métodos y constantes de clase definidas por el usuario.
 * Los mensajes son a nivel de warning, no detienen la ejecución del script.
 */
class PhpVersion
{
    #[\Deprecated(
        message: "Use NO_ACTIVO en su lugar",
        since: "el día que hice este script",
    )]
    public const INACTIVO = false;
    public const NO_ACTIVO = 0;

    #[\Deprecated(
        message: "use PhpVersion::getVersion() instead",
        since: "8.4",
    )]
    public function getPhpVersion(): string
    {
        return $this->getVersion();
    }

    public function getVersion(): string
    {
        return '8.4';
    }
}

$phpVersion = new PhpVersion();
// Deprecated: Method PhpVersion::getPhpVersion() is deprecated since 8.4, use PhpVersion::getVersion() instead
echo $phpVersion->getPhpVersion();

// Deprecated: Constant PhpVersion::INACTIVO is deprecated, Use NO_ACTIVO en su lugar
echo $phpVersion::INACTIVO;

echo "hola mundo";
