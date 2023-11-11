<?php
/**
 * Las funciones sirven principalmente para evitar repetir código
 * Las funciones permiten también agrupar código para dar orden
 */
function saludar()
{
    echo "hola mundo";
}

/**
 * Para llamar a una función debe usarse el nombre de la función seguido de ()
 * Es importante destacar que el código se ejecuta de arriba hacia abajo, 
 * de tal manera que antes de llamar una función debe estar declarada o importada
 */
saludar();


/**
 * No es recomendable imprimir directamente desde una función
 * Lo recomendable es retornar un valor
 * Esto permite flexibilidad
 */
function imprimir()
{
    return "hola mundo";
}

/**
 * Cuando una función retorna un valor podemos manipularla como deseemos
 * podríamos imprimirla en pantalla, guardarla en un archivo, en una base de datos, etc
 */
echo imprimir();
