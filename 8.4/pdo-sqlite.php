<?php
/**
 * https://www.php.net/manual/en/pdo.connect.php
 * https://www.php.net/manual/en/class.pdo-sqlite.php
 */
$username = "";
$password = "";

$connection = PDO::connect(
    'sqlite:foo.db',
    $username,
    $password,
); // object(Pdo\Sqlite)

$connection->createFunction(
    'prepend_php',
    static fn ($string) => "PHP {$string}",
); // Does not exist on a mismatching driver.
$stmt = $connection->query('SELECT nombre FROM persona');
var_dump($stmt->fetchAll());
