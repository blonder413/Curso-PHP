<?php
/**
 * https://www.php.net/manual/es/mysqlinfo.api.choosing.php
 */
require_once 'Conexion.php';
require_once 'Flash.php';

class Categoria extends Conexion
{
    public $mysqli;
    public $tabla = 'categoria';

    public function __construct()
    {
        $this->mysqli = parent::conectar();
    }

    public function all()
    {
        $resultado = $this->mysqli->query("SELECT * FROM $this->tabla ORDER BY id desc;");
        // ajustamos el puntero al primer resultado
        $resultado->data_seek(0);
        $datos = [];
        while ($fila = $resultado->fetch_object('Categoria')) {
            $datos[] = $fila;
        }
        return $datos;
    }

    public function contar()
    {
        $sql = "SELECT count(*) AS total FROM $this->tabla;";
        $stmt = $this->mysqli->query($sql);

        return $stmt->fetch_column(0);
    }

    public function editar($id)
    {
        try {
            $sql = "UPDATE $this->tabla SET categoria = ?, slug = ?, imagen = ?, descripcion = ?, usuario_modifica = 1,";
            $sql .= "fecha_modifica = NOW() WHERE id = ?;";
            if (!($sentencia = $this->mysqli->prepare($sql))) {
                echo "Falló la preparación ($this->mysqli->errno) $sentencia->error";
            }
            /**
             * s    -> string
             * d    -> double
             * i    -> entero
             * b    -> blob
             */
            $categoria = $_POST['categoria'];
            $slug = $_POST['slug'];
            $imagen = $_POST['imagen'];
            $descripcion = $_POST['descripcion'];
            if (!$sentencia->bind_param('ssssi', $categoria, $slug, $imagen, $descripcion, $id)) {
                echo "Falló la vinculación de parámetros ($sentencia->errorno) $sentencia->error";
            }

            if (!$sentencia->execute()) {
                echo "Falló la ejecución ($sentencia->errorno) $sentencia->error";
            }

            Flash::set('success', 'Categoría editada exitosamente');
            header("location: index.php");
        } catch (mysqli_sql_exception $e) {
            Flash::set('success', 'Error al editar la categoría');
            header("location: index.php");
        }
        
    }

    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM $this->tabla WHERE id = ?;";
            if (!$sentencia = $this->mysqli->prepare($sql)) {
                $mensaje = "Falló la preparación ($this->mysqli->errno) $sentencia->error";
                throw new Exception($mensaje, 500);
            }

            if (!$sentencia->bind_param('i', $id)) {
                $mensaje = "Falló la vinculación ($this->mysqli->errno) $sentencia->error";
                throw new Exception($mensaje, 500);
            }

            if (!$sentencia->execute()) {
                $mensaje = "Falló la ejecución ($this->mysqli->errno) $sentencia->error";
                throw new Exception($mensaje, 500);
            }
            
            Flash::set('success', 'Categoría eliminada exitosamente');
            header("location: index.php");
        } catch (Exception $e) {
            include '404.php';
            exit;
        }
    }

    public function find($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabla WHERE id = ?;";
            if (!$sentencia = $this->mysqli->prepare($sql)) {
                $mensaje = "Falló la preparación ($this->mysqli->errno) $sentencia->error";
                throw new Exception($mensaje, 500);
            }

            if (!$sentencia->bind_param('i', $id)) {
                $mensaje = "Falló la vinculación ($this->mysqli->errno) $sentencia->error";
                throw new Exception($mensaje, 500);
            }

            if (!$sentencia->execute()) {
                $mensaje = "Falló la ejecución ($this->mysqli->errno) $sentencia->error";
                throw new Exception($mensaje, 500);
            }
            
            if (!$resultado = $sentencia->get_result()) {
                $mensaje = "Falló al obtener los registros ($this->mysqli->errno) $sentencia->error";
                throw new Exception($mensaje, 500);
            }
            
            $datos = $resultado->fetch_object();

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

    public function insertar()
    {
        $sql = "INSERT INTO $this->tabla VALUES(null, ?, ?, ?, ?, 1, NOW(), 1, NOW());";
        if (!($sentencia = $this->mysqli->prepare($sql))) {
            echo "Falló la preparación ($this->mysqli->errno) $sentencia->error";
        }
        /**
         * s    -> string
         * d    -> double
         * i    -> entero
         * b    -> blob
         */
        $categoria = $_POST['categoria'];
        $slug = $_POST['slug'];
        $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];
        if (!$sentencia->bind_param('ssss', $categoria, $slug, $imagen, $descripcion)) {
            echo "Falló la vinculación de parámetros ($sentencia->errorno) $sentencia->error";
        }

        if (!$sentencia->execute()) {
            echo "Falló la ejecución ($sentencia->errorno) $sentencia->error";
        }

        Flash::set('success', 'Categoría creada exitosamente');
        header("location: index.php");
    }
}
