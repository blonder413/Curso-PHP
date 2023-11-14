<?php
require_once 'Categoria.php';
$obj = new Categoria;
$obj->eliminar($_GET['id']);
