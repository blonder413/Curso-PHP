<?php

/**
 * json_validate() permite verificar si una cadena es JSON sintácticamente válido,
 * siendo más eficiente que json_decode().
 * Sin embargo, solo valida, debemos usar json_decode si queremos manipular la información.
 * Puede ser útil por ejemplo para validar un json antes de enviarlo a alguna API.
 */
$json = '{ "persona": { "nombre": "jill" } }';
$decodificado = json_decode($json);
$validado = json_validate($json);

var_dump($validado, $decodificado);

$bad_json = "{ 'bar': 'baz' }";
var_dump(json_validate($bad_json));
var_dump(json_decode($bad_json));
