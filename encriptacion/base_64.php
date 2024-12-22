<?php
$texto = "blonder413";
$codificado = base64_encode($texto);
$original = base64_decode($codificado);
echo "codificado: $codificado\n";
echo "original: $original\n";

$codificado="CPNMUOJ1E8======"; // BASE32-HEX("foobar")
$original = base64_decode($codificado);
$original = base64_decode($codificado, true);
echo "codificado: $codificado\n";
var_dump($original);
