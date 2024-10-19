<?php
/**
 * En algunas ocasiones podemos no tener acceso a la configuración del servidor
 * podemos usar ini_set para cambiar lo valores definidos
 * por ejemplo, para activar la visualización de errores
 */

/**
 *  Determina si los errores deberían ser impresos en pantalla como parte de la salida o si deberían ocultarse al
 * usuario.
 * Aunque display_errors puede ser establecido en tiempo de ejecución (con ini_set()), no tendrá ningún efecto si el
 * script tiene errores fatales. Esto es debido a que la acción deseada en tiempo de ejecución no se ejecuta.
 */
ini_set("display_errors", 1);

/**
 * Incluso cuando display_errors está activado, los errores que ocurren durante la secuencia de arranque de PHP no se
 * muestran. Se recomienda encarecidamente mantener desactivado display_startup_errors, excepto para la depuración.
 */
ini_set("display_startup_errors", 1);

/**
 * https://www.php.net/manual/es/function.error-reporting.php
 * La función error_reporting() establece la directiva error_reporting en tiempo de ejecución. PHP tiene varios niveles
 * de errores para notificar, al utilizar ésta función se define el nivel de duración (tiempo de ejecución) de sus
 * scripts. Si el parámetro opcional level no se define, la función error_reporting() sólo devolverá el nivel actual de
 * notificación de error.
 */
error_reporting(E_ALL);
