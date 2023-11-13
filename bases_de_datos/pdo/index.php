<?php
require_once 'Categoria.php';
require_once 'Flash.php';

$obj = new Categoria;
$datos = $obj->get();
// echo '<pre>';
// print_r($datos);
$total = $obj->contar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos con PDO</title>
</head>
<body>
    <h1>Categorías</h1>
    <p><small>hay <?= $total; ?> registros</small></p>

    <a href="crear.php">Crear</a>

    <?php if(isset($_GET['m'])): ?>
        <?php if ($_GET['m'] == 1): ?>
            <h2>Categoría eliminada correctamente</h2>
        <?php elseif ($_GET['m'] == 2): ?>
            <h2>No se puede eliminar la categoría porque tiene artículos asociados</h2>
        <?php elseif ($_GET['m'] == 3): ?>
            <h2>Se ha presentado un error</h2>
        <?php elseif ($_GET['m'] == 4): ?>
            <h2>Se ha insertado el registro</h2>
        <?php elseif ($_GET['m'] == 5): ?>
            <h2>Ya existe la categoría</h2>
        <?php elseif ($_GET['m'] == 6): ?>
            <h2>Categoría editada correctamente</h2>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (Flash::exist('success')): ?>
        <div class="alert alert-success"><?= Flash::get('success'); ?></div>
    <?php endif; ?>

    <?php if(count($datos) == 0): ?>
        <h2>No existen datos</h2>
    <?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Categoría</th>
                <th>Slug</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Usuario Crea</th>
                <th>Fecha Crea</th>
                <th>Usuario Modifica</th>
                <th>Fecha Modifica</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato): ?>
            <tr>
                <td><?= $dato->id; ?></td>
                <td><?= $dato->categoria; ?></td>
                <td><?= $dato->slug; ?></td>
                <td><?= $dato->imagen; ?></td>
                <td><?= $dato->descripcion; ?></td>
                <td><?= $dato->usuario_crea; ?></td>
                <td><?= $dato->fecha_crea; ?></td>
                <td><?= $dato->usuario_modifica; ?></td>
                <td><?= $dato->fecha_modifica; ?></td>
                <td>
                    <a href="ver.php?id=<?= $dato->id; ?>">Ver</a>
                    <a href="eliminar.php?id=<?= $dato->id; ?>">Eliminar</a>
                    <a href="editar.php?id=<?= $dato->id; ?>">Editar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>