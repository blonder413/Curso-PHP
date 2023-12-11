<?php
/**
 * A partir de PHP 8.2 crear atributos dinámicos genera un deprecated notice
 * Los atributos dinámicos de stdClass son permitidos
 */
class User
{
    public $name;
}

$user = new User();
$user->last_name = 'Doe'; // Deprecated notice
echo $user->last_name;

$user = new stdClass();
$user->last_name = 'Doe'; // Still allowed
echo $user->last_name;
