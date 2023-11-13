<?php
require_once 'Categoria.php';
$obj = new Categoria;
$categoria = $obj->find($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoría <?= $categoria->categoria; ?></title>
</head>
<body>
    <table>
        <tr>
            <th>Categoría</th>
            <td><?= $categoria->categoria; ?></td>
        </tr>
        <tr>
            <th>Slug</th>
            <td><?= $categoria->slug; ?></td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td><?= $categoria->descripcion; ?></td>
        </tr>
        <tr>
            <th></th>
            <td></td>
        </tr>
    </table>
</body>
</html>