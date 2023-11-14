<?php
session_start();
const FLASH = 'FLASH_MESSAGES';
const FLASH_ERROR = 'error';
const FLASH_WARNING = 'warning';
const FLASH_INFO = 'info';
const FLASH_SUCCESS = 'success';

abstract class Flash
{
    public static function exist($nombre)
    {
        if (isset($_SESSION[$nombre])) {
            return true;
        } else {
            return false;
        }
    }

    public static function set($nombre, $mensaje)
    {
        $_SESSION[$nombre] = $mensaje;
    }

    public static function get(string $nombre): string
    {
        if (self::exist($nombre)) {
            $mensaje = $_SESSION[$nombre];
            unset($_SESSION[$nombre]);
        } else {
            $mensaje = '';
        }
        
        return $mensaje;
    }
}
