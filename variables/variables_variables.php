<?php
/**
 * https://www.php.net/manual/es/language.variables.variable.php
 * A veces es conveniente tener nombres de variables variables.
 * Dicho de otro modo, son nombres de variables que se pueden definir y usar dinámicamente.
 */
$a = 'hello';
$$a = 'world';  // $hello = 'world'

// debe ir entre llaves, de lo contrario mostrará el nombre de la variable, es decir, el valor de $a
echo "$a {$$a} \n";

echo "$a $hello \n";

$nameTypes    = array("first", "last", "company");
$name_first   = "John";
$name_last    = "Doe";
$name_company = "PHP.net";

// Then this loop is ...
foreach ($nameTypes as $type) {
    print ${"name_$type"} . "\n";
}
