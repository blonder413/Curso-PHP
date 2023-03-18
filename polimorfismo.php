<?php
class Persona {
    public function saludar() {
        return 'hola soy una persona';
    }
}

class Cliente extends Persona { }

class Helper { }

/**
  * -------------------------------------------------------------------------------------------------------------------
  * Como la clase cliente hereda de persona, 
  * un objeto tipo cliente puede comportarse como una persona.
  * En caso contrario, si el parámetro fuera de tipo Cliente no
  * podría recibir un parámetro de tipo Persona.
  * -------------------------------------------------------------------------------------------------------------------
  */
function get_nombre(Persona $persona) {
    return $persona->saludar();
}


$cliente = new Cliente();
echo get_nombre($cliente);

$persona = new Persona();
echo get_nombre($persona);

$helper = new Helper();
echo get_nombre($helper);

