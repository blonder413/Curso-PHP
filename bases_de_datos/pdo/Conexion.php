<?php
abstract class Conexion
{
    protected $dbh;

    public function conectar()
    {
        try {
            $servidor = 'localhost';
            $motor = 'mysql';
            $user = 'cursos';
            $password = 'Cursos.Blonder413';
            $bd = 'blogyii2';
    
            //mysql:host=localhost;dbname=blogyii2
            $this->dbh = new PDO(
                "$motor:host=$servidor;dbname=$bd", $user, $password,
                [
                    // https://www.php.net/manual/en/ref.pdo-mysql.php
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8; SET TIME_ZONE 'America/Bogota'",
                ]
            );
            // define el modo de error manejado por excepciones
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->dbh;
        } catch(PDOException $e) {
            echo 'Error en la conexión: ' . $e->getMessage();
        }
        
    }
}
