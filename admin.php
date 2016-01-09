<?php


$php_value = phpversion();
if (version_compare($php_value, '5.3.0') == -1) {
    echo ' (' . $php_value . ') ';
    die();
}

define('AREA', 'A');
define('ACCOUNT_TYPE', 'admin');

try {
    require(dirname(__FILE__) . '/init.php');

    fn_dispatch();
} catch (Tygh\Exceptions\AException $e) {
    $e->output();
}
