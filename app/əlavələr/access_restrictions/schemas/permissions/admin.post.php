<?php
//Mahammad Ismayilzade

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$schema['access_restrictions'] = array (
    'permissions' => 'manage_access_restrictions',
);
$schema['tools']['modes']['update_status']['param_permissions']['table']['access_restriction'] = 'manage_access_restrictions';

return $schema;
