<?php
abstract class Conexion
{
    public function conectar()
    {
        $mysqli = new mysqli('localhost', 'cursos', 'Cursos.Blonder413', 'blogyii2', 3306);

        if ($mysqli->connect_errno) {
            header("Location: offline.html");
        }
        $mysqli->set_charset('utf8');
        return $mysqli;
    }
}
