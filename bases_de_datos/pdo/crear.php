<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>
</head>
<body>
    <h1>Crear Categoría</h1>
    <form action="crear_post.php" method="post">
        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria">
        <br>

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">
        <br>

        <label for="imagen">Imagen</label>
        <input type="text" name="imagen" id="imagen">
        <br>

        <label for="descripcion">Descripción</label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" value="Guardar" name="guardar">
    </form>
</body>
</html>