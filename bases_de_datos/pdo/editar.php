<?php
require_once 'Categoria.php';
$obj = new Categoria;
$categoria = $obj->find($_GET['id']);
// echo '<pre>';
// print_r($categoria);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
</head>
<body>
    <h1>Editar Categoría</h1>
    <form action="editar_post.php" method="post">
        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria" value="<?= $categoria->categoria; ?>">
        <br>

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="<?= $categoria->slug; ?>">
        <br>

        <label for="imagen">Imagen</label>
        <input type="text" name="imagen" id="imagen" value="<?= $categoria->imagen; ?>">
        <br>

        <label for="descripcion">Descripción</label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?= $categoria->descripcion; ?></textarea>
        <br>

        <input type="hidden" name="id" id="id" value="<?= $categoria->id; ?>">
        <input type="submit" value="Guardar" name="guardar">
    </form>
</body>
</html>