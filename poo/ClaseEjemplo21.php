<?php
class SerHumano {
    public function saludar() {
        return 'hola soy un ser humano';
    }
}

class Cliente extends SerHumano { }

class Helper { }

/**
  * -------------------------------------------------------------------------------------------------------------------
  * Como la clase cliente hereda de SerHumano,
  * un objeto tipo cliente puede comportarse como una ser humano.
  * En caso contrario, si el parámetro fuera de tipo Cliente no
  * podría recibir un parámetro de tipo SerHumano.
  * -------------------------------------------------------------------------------------------------------------------
  */
function getNombre(SerHumano $persona) {
    return $persona->saludar();
}


$cliente = new Cliente();
echo getNombre($cliente);
echo "\n";
// Podemos averiguar las clases padres de una clase, podemos pasarle un string o un objeto
// var_dump(class_parents('persona'));
// var_dump(class_parents($cliente));

$persona = new SerHumano();
echo getNombre($persona);

$helper = new Helper();
// el objeto $helper no puede llamar a la función getNombre porque no es de tipo SerHumano
// echo getNombre($helper);

