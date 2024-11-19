<?php
/**
 *  Constantes de clase tipificadas
 * Ahora podemos establecer el tipo de una constante para que a la hora de sobreescribirla no se cambie el tipo
 */
interface Matematicas {
    const PI = 3.1416;
    const string VERSION = "8.3";
}

class Circulo implements Matematicas {
    const PI = [3, 1416];
    /*
    No es posible usar un array como valor para la constante ya que ha sido definida como string
    */
    const string VERSION = [];
}
