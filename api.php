<?php


use Tygh\Api;
use Tygh\Registry;


define('API', true);
define('NO_SESSION', true);

try {
    require dirname(__FILE__) . '/init.php';

   
    $api = Tygh::$app['api'];
    if ($api instanceof Api) {
        $api->handleRequest();
    }

} catch (Tygh\Exceptions\AException $e) {
    $e->output();
}
