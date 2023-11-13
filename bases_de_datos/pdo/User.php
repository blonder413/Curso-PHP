<?php
require_once 'Conexion.php';
require_once 'Flash.php';

class User extends Conexion
{
    private $conexion;
    private $tabla = 'user';

    public $id;
    public $name;
    public $username;
    public $email;
    public $photo;
    public $status;

    public function __construct()
    {
        $this->conexion = parent::conectar();
    }

    /**
     * Buscar un registro por el id
     */
    public function find($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabla WHERE id = :id;";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            // return $stmt->fetch(PDO::FETCH_OBJ);
            // return $stmt->fetchObject('Categoria');
            // return $stmt->fetchObject(__CLASS__);
            $datos = $stmt->fetchObject(__CLASS__);

            if (is_object($datos) and $datos->id) {
                return $datos;
            } else {
                // return new Categoria;
                throw new Exception("No encontrado", 404);
            }
        } catch (Exception $e) {
            // die($e->getMessage());
            include '404.php';
            exit;
        }
    }
}