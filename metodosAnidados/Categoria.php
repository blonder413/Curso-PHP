<?php
require_once 'Conexion.php';

class Categoria extends Conexion{
    private $conexion;
    private $consulta;

    public function __construct()
    {
        $this->conexion = $this->getConnection();
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
        $stmt = $this->conexion->query($this->consulta);

//        return $stmt->fetch(PDO::FETCH_ASSOC);
        return $stmt->fetch(PDO::FETCH_OBJ);
        // return $stmt->fetchObject(__CLASS__);
    }

    public function all()
    {
        $stmt = $this->conexion->query($this->consulta);

//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}