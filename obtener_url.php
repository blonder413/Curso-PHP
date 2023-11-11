<?php
// obtener http o https
$protocolo = (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';

// obtener directorio de trabajo
$dir = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

// completar la URL. Eliminamos el / final porque en algunos casos viene y en otros no
$url = $protocolo . rtrim($dir, '/') . '/';

echo $url;
