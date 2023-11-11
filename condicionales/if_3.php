<?php
$a = 4;
$b = 13;

// if anidados
if ($a > $b) {
    echo "$a es mayor que $b";
} else {
    if ($a < $b) {
        echo "$a es menor que $b";
    } else {
        echo "$a es igual a $b"
    }
}

// sintaxis resumida de if anidados
if ($a > 13) {
    echo "$a es mayor que $b";
} elseif ($a < 13) {
    echo "$a es menor que $b";
} else {
    echo "$a es igual a $b";
}

// sintaxis resumida sin usar llaves
if ($a > $b)
    echo "$a es mayor que $b";
elseif ($a < $b)
    echo "$a es menor que $b";
else
    echo "$a es igual a $b";