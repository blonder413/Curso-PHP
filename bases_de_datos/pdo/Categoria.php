<?php
require_once 'Conexion.php';
require_once 'Flash.php';

class Categoria extends Conexion
{
    private $conexion;
    private $tabla = 'categoria';

    public $id;
    public $categoria;
    public $slug;
    public $imagen;
    public $descripcion;

    public function __construct()
    {
        $this->conexion = parent::conectar();
    }

    /**
     * Contar la cantidad de registros
     * https://www.php.net/manual/es/pdostatement.fetchcolumn
     */
    public function contar()
    {
        $sql = "SELECT count(*) AS total FROM $this->tabla;";
        $stmt = $this->conexion->query($sql);

        return $stmt->fetchColumn();
    }

    public function editar($id)
    {
        try {
            $sql = "UPDATE $this->tabla SET categoria = ?, slug = ?, imagen = ?, descripcion = ?, ";
            $sql .= "fecha_modifica = NOW() WHERE id = ?;";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindValue(1, $_POST['categoria'], PDO::PARAM_STR);
            $stmt->bindValue(2, $_POST['slug'], PDO::PARAM_STR);
            $stmt->bindValue(3, $_POST['imagen'], PDO::PARAM_STR);
            $stmt->bindValue(4, $_POST['descripcion'], PDO::PARAM_STR);
            $stmt->bindValue(5, $id, PDO::PARAM_INT);
            $stmt->execute();
            Flash::set('success', 'Categoría actualizada exitosamente');
            header("location: index.php?m=6");
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                header("location: index.php?m=5");
            } else {
                // die($e->getMessage());
                header("location: index.php?m=3");
            }
        }
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
            include '404.php';
            exit;
        }
    }

    /**
     * Obtenemos todos los datos de la tabla
     */
    public function get()
    {
        $sql = "SELECT * FROM $this->tabla ORDER BY id DESC;";
        $stmt = $this->conexion->query($sql);

        // retorna un arreglo asociativo donde el índice es el nombre del campo de la tabla
        // return $stmt->fetchAll(PDO::FETCH_ASSOC);

        // retorna un objeto anónimo donde el índice es el nombre del campo de la tabla
        // return $stmt->fetchAll(PDO::FETCH_OBJ);

        /**
         * retorna un objeto de la clase pasada como parámetro donde el índice es el nombre del campo de la tabla
         * Debemos tener la clase creada e importada
         */
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Categoria');
    }

    /**
     * Intenta eliminar un registro, en caso de no poder genera una excepción
     * https://dev.mysql.com/doc/mysql-errors/8.0/en/server-error-reference.html
     */
    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM $this->tabla WHERE id = :id;";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            header("location: index.php?m=1");
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1451) {
                header("location: index.php?m=2");
            } else {
                // echo $e->getMessage();
                header("location: index.php?m=3");
            }
        }
    }

    public function insertar()
    {
        try {
            $sql = "INSERT INTO $this->tabla VALUES(null, ?, ?, ?, ?, 1, NOW(), 1, NOW());";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindValue(1, $_POST['categoria'], PDO::PARAM_STR);
            $stmt->bindValue(2, $_POST['slug'], PDO::PARAM_STR);
            $stmt->bindValue(3, $_POST['imagen'], PDO::PARAM_STR);
            $stmt->bindValue(4, $_POST['descripcion'], PDO::PARAM_STR);
            $stmt->execute();
            // die($this->conexion->lastInsertId());
            Flash::set('success', 'Categoría creada exitosamente');
            header("location: index.php?m=4");
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                header("location: index.php?m=5");
            } else {
                // die($e->getMessage());
                header("location: index.php?m=3");
            }
        }
    }
}
