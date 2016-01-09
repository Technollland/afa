<?php

//Mahammad Ismayilzade Technollland
if (!defined('BOOTSTRAP')) { die('Access denied'); }


error_reporting(E_ALL);
ini_set('display_errors', 0);


if (PHP_INT_SIZE == 4 && (substr(ini_get('memory_limit'), 0, -1) < "64")) {

  @ini_set('memory_limit', '64M');
} elseif (PHP_INT_SIZE == 8 && (substr(ini_get('memory_limit'), 0, -1) < "256")) {
 
  @ini_set('memory_limit', '256M');
}

if (!defined('CONSOLE')) {
   
    @set_time_limit(3600);
}


$config['db_host'] = '%DB_HOST%';
$config['db_name'] = '%DB_NAME%';
$config['db_user'] = '%DB_USER%';
$config['db_password'] = '%DB_PASSWORD%';

$config['database_backend'] = 'mysqli';


$config['table_prefix'] = 'cscart_';


$config['http_host'] = '%HTTP_HOST%';
$config['http_path'] = '%HOST_DIR%';


$config['https_host'] = '%HTTPS_HOST%';
$config['https_path'] = '%HOST_DIR%';


$config['customer_index'] = 'index.php';
$config['admin_index']    = 'admin.php';



$config['demo_mode'] = false;


$config['tweaks'] = array (
    
    'sanitize_user_html' => 'auto',
    'anti_csrf' => true, 
    'disable_block_cache' => false,
    'disable_localizations' => true, 
    'disable_dhtml' => false,
    'dev_js' => false, 
    'redirect_to_cart' => false, 
    'api_https_only' => false, 
    'api_allow_customer' => false, 
    'lazy_thumbnails' => false, 
    'image_resize_lib' => 'auto', 
    'products_found_rows_no_cache_limit' => 100, 
);


$config['crypt_key'] = 'YOURVERYSECRETKEY';


$config['cache_backend'] = 'file';
$config['cache_redis_server'] = 'localhost';
$config['cache_redis_global_ttl'] = 0; 

$config['session_backend'] = 'database';
$config['session_redis_server'] = 'localhost';
$config['cache_apc_global_ttl'] = 0;
$config['cache_xcache_global_ttl'] = 0;


$config['store_prefix'] = '';


$config['cdn_backend'] = 'cloudfront';


$config['storage'] = array(
    'images' => array(
        'prefix' => 'images',
        'dir' => $config['dir']['root'],
        'cdn' => true
    ),
    'downloads' => array(
        'prefix' => 'downloads',
        'secured' => true,
        'dir' => $config['dir']['var']
    ),
    'assets' => array(
        'dir' => & $config['dir']['cache_misc'],
        'prefix' => 'assets',
        'cdn' => true
    ),
    'custom_files' => array(
        'dir' => & $config['dir']['var'],
        'prefix' => 'custom_files'
    )
);


define('DEFAULT_FILE_PERMISSIONS', 0666);
define('DEFAULT_DIR_PERMISSIONS', 0777);


define('MAX_FILES_IN_DIR', 1000);


if (file_exists(DIR_ROOT . '/local_conf.php')) {
    include_once(DIR_ROOT . '/local_conf.php');
}


if (PRODUCT_STATUS != '' && !defined('DEVELOPMENT')) {
    ini_set('display_errors', 'on');
    ini_set('display_startup_errors', true);

    define('DEVELOPMENT', true);
}
