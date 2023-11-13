<?php
require_once 'Categoria.php';
$obj = new Categoria;
$obj->editar($_POST['id']);
