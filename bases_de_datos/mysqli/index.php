<?php
require_once 'Categoria.php';
$categoria = new Categoria;
$categorias = $categoria->all();
// echo '<pre>';
// print_r($categorias);
$total = $categoria->contar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
</head>
<body>
    <h1>Categorías</h1>

    <p><small>hay <?= $total; ?> registros</small></p>

    <a href="crear.php">Crear</a>

    <?php if (Flash::exist('success')): ?>
        <div class="alert alert-success"><?= Flash::get('success'); ?></div>
    <?php endif; ?>

    <?php if(count($categorias) == 0): ?>
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
            <?php foreach ($categorias as $dato): ?>
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