<?php
/**
 * https://www.php.net/manual/es/language.oop5.lazy-objects.php
 * Un objeto perezoso es un objeto cuya inicialización se aplaza hasta que se observe o modifique su estado.
 * Los puntos de entrada para crear un objeto perezoso son los métodos ReflectionClass::newLazyGhost () y ReflectionClass::newLazyProxy().
 */
class Example
{
    public function __construct(public int $prop)
    {
        echo __METHOD__, "\n";
    }
}

$reflector = new ReflectionClass(Example::class);

/**
 * ReflectionClass::newLazyGhost
 * https://www.php.net/manual/es/reflectionclass.newlazyghost.php
 * Crea una nueva instancia fantasma perezoso de la clase, adjuntando el inicializador.
 * El constructor no se llama, y las propiedades no se establecen en su valor por defecto.
 * Sin embargo, el objeto se inicializará automáticamente invocando el inicializador la primera vez que se observe
 * o modifique su estado.
 */
// $lazyObject = $reflector->newLazyGhost(function (Example $object) {
//     // Initialize object in-place
//     $object->__construct(1);
// });

/**
 * ReflectionClass::newLazyProxy
 * https://www.php.net/manual/es/reflectionclass.newlazyproxy.php
 * Crea una nueva instancia proxy perezoso de la clase, adjuntando la función de fábrica a ella.
 * El constructor no se llama, y las propiedades no se establecen en sus valores por defecto.
 * Cuando se intenta observar o modificar el estado del proxy por primera vez,
 * la función de fábrica se llama a proporcionar una instancia real, que luego se adjunta al proxy.
 * Después de esto, todas las interacciones posteriores con el proxy se envían a la instancia real.
 */
$lazyObject = $reflector->newLazyProxy(function (Example $object) {
    // Create and return the real instance
    return new Example(1);
});

var_dump($lazyObject);
var_dump(get_class($lazyObject));

// Triggers initialization
var_dump($lazyObject->prop);
