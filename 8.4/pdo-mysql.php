<?php
/**
 * https://www.php.net/manual/en/pdo.connect.php
 * https://www.php.net/manual/en/class.pdo-mysql.php
 */
$username = "root";
$password = "123456";
// Para Contenedores usamos el nombre del contenedor
$host = "mysql:host=mi-mysql;dbname=prueba";
// $host = "mysql:host=localhost;dbname=prueba";

$connection = PDO::connect(
    $host,
    $username,
    $password,
); // object(Pdo\Mysql)

var_dump($connection);
$stmt = $connection->query('SELECT nombre FROM persona');
var_dump($stmt->fetchAll());
