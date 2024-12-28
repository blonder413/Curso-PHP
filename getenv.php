<?php
// Example use of getenv()
$user = getenv('USER');
echo $user . PHP_EOL;

// Or simply use a Superglobal ($_SERVER or $_ENV)
$user = $_SERVER['USER'];
echo $user . PHP_EOL;

// Safely get the value of an environment variable, ignoring whether
// or not it was set by a SAPI or has been changed with putenv
$pwd = getenv('PWD', true) ?: getenv('PWD');
echo $pwd . PHP_EOL;

// solo funciona en el script actual
putenv("SERVER_NAME=localhost");
$host = getenv('SERVER_NAME', true) ?: getenv('SERVER_NAME');
echo $host . PHP_EOL;

