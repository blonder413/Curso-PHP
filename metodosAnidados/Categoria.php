<?php
require_once 'Conexion.php';

class Categoria extends Conexion{
    private $con;
    private $consulta;

    public $id;
    public $categoria;

    public function __construct()
    {
        $this->con = $this->getConnection();
    }

    public function find()
    {
        $this->consulta = 'SELECT * FROM categoria';
        return $this;
    }

    public function where($campo, $valor, $like=false)
    {
        if ($like) {
            $this->consulta .= ' WHERE ' . $campo . ' LIKE "%' . $valor . '%"';
        } else {
            $this->consulta .= ' WHERE ' . $campo . ' = "' . $valor . '"';
        }
        
        return $this;
    }

    public function orderBy($campo = 'id', $orden = 'desc')
    {
        $this->consulta .= ' ORDER BY ' . $campo . ' ' . $orden;
        return $this;
    }

    public function one()
    {
        $this->consulta .= ' LIMIT 0,1';
        $stmt = $this->con->query($this->consulta);

//        return $stmt->fetch(PDO::FETCH_ASSOC);
        $datos = $stmt->fetch(PDO::FETCH_OBJ);
        if (is_object($datos) and $datos->id) {
            return $datos;
        } else {
            // return new Categoria;
            throw new Exception("No encontrado", 404);
        }
    }

    public function all()
    {
        $stmt = $this->con->query($this->consulta);

//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}