<?php
/**
 * A partir de PHP 8.2 se permite establecer true, false y null como tipo de retorno
 * stand-alone types
 */
class Falsy
{
    public function alwaysFalse(): false 
    { 
        return false;
    }

    public function alwaysTrue(): true 
    { 
        return true;
    }

    public function alwaysNull(): null 
    { 
        return null;
    }
}
