<?php
require_once 'Categoria.php';
$categoria = new Categoria();

$datos = $categoria->find()->all();

//print_r($datos);

/*
foreach ($datos as $key => $value) {
    echo $value['categoria'] . '<br>';
}
*/

foreach ($datos as $key => $value) {
    echo $value->categoria . '<br>';
}

//$cat = $categoria->find()->one();
$cat = $categoria->find()
        ->where('categoria', 'fugas', true)
        ->orderBy()->one();
echo $cat->categoria;
