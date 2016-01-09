<?php
//Mahammad Ismayilzade Technollland

if (!defined('BOOTSTRAP')) { die('Access denied'); }


define('NEW_FEATURE_GROUP_ID', 'OG');


define('CATEGORY_THRESHOLD', 100); 
define('CATEGORY_SHOW_ALL', 100);  


define('PAGE_THRESHOLD', 40); 
define('PAGE_SHOW_ALL', 100); 


define('PRODUCT_FEATURE_VARIANTS_THRESHOLD', 40); 


define('MAX_RECENTLY_VIEWED', 10);


define('PRODUCT_FEATURES_THRESHOLD', 50);


define('SUNDAY',    0);
define('MONDAY',    1);
define('TUESDAY',   2);
define('WEDNESDAY', 3);
define('THURSDAY',  4);
define('FRIDAY',    5);
define('SATURDAY',  6);


define('STATUSES_ORDER', 'O');
define('STATUS_INCOMPLETED_ORDER', 'N');
define('STATUS_PARENT_ORDER', 'T');
define('STATUS_BACKORDERED_ORDER', 'B');
define('STATUS_CANCELED_ORDER', 'I');


define('LOGIN_STATUS_USER_NOT_FOUND', '0');
define('LOGIN_STATUS_OK', '1');
define('LOGIN_STATUS_USER_DISABLED', '2');


define('ALLOW_USERGROUP_ID_FROM', 3);
define('ALL_USERGROUPS', -1);
define('USERGROUP_ALL', 0);
define('USERGROUP_GUEST', 1);
define('USERGROUP_REGISTERED', 2);


define('USER_PASSWORD_LENGTH', '8');


define('SEO_DELIMITER', '-');


define('SECONDS_IN_HOUR', 60 * 60); 


define('SECONDS_IN_DAY', SECONDS_IN_HOUR * 24);


define('COOKIE_ALIVE_TIME', SECONDS_IN_DAY * 7); 


define('SESSION_ALIVE_TIME', SECONDS_IN_HOUR * 2); 


define('SESSIONS_STORAGE_ALIVE_TIME',  SECONDS_IN_DAY * 7 * 2); 


define('SESSION_ONLINE', 60 * 5); 


define('INSTALL_DB_EXECUTION', SECONDS_IN_HOUR); 


define('THEME_MANIFEST', 'manifest.json');
define('THEME_MANIFEST_INI', 'manifest.ini');


define('CONTROLLER_STATUS_REDIRECT', 302);
define('CONTROLLER_STATUS_OK', 200);
define('CONTROLLER_STATUS_NO_PAGE', 404);
define('CONTROLLER_STATUS_DENIED', 403);
define('CONTROLLER_STATUS_DEMO', 401);

define('INIT_STATUS_OK', 1);
define('INIT_STATUS_REDIRECT', 2);
define('INIT_STATUS_FAIL', 3);

define('PLACE_ORDER_STATUS_OK', 1);
define('PLACE_ORDER_STATUS_TO_CART', 2);
define('PLACE_ORDER_STATUS_DENIED', 3);


define('LAST_EDITED_ITEMS_COUNT', 10);


define('AUTO_META_DESCRIPTION', true);


define('DEFAULT_TABLE_PREFIX', 'cscart_');

define('CS_PHP_VERSION', phpversion());


define('PRODUCT_NAME', 'CS-Cart');
define('PRODUCT_VERSION', '4.3.5');
define('PRODUCT_STATUS', '');


define('PRODUCT_EDITION', 'ULTIMATE');
define('PRODUCT_BUILD', '');


if (!defined('ACCOUNT_TYPE')) {
    define('ACCOUNT_TYPE', 'customer');
}


define('POPULARITY_VIEW', 3);
define('POPULARITY_ADD_TO_CART', 5);
define('POPULARITY_DELETE_FROM_CART', 5);
define('POPULARITY_BUY', 10);

define('MAILING_LIST_ID', 1);


define('SESS_VALIDATE_UA', true); 

define('BILLING_ADDRESS_PREFIX', 'b');
define('SHIPPING_ADDRESS_PREFIX', 's');

define('DB_MAX_ROW_SIZE', 10000);
define('DB_ROWS_PER_PASS', 40);


$config = array();

$config['dir'] = array(
    'root' => DIR_ROOT,
    'functions' => DIR_ROOT . '/app/functions/',
    'lib' => DIR_ROOT . '/app/lib/',
    'addons' => DIR_ROOT . '/app/addons/',
    'design_frontend' => DIR_ROOT . '/design/themes/',
    'design_backend' => DIR_ROOT . '/design/backend/',
    'payments' => DIR_ROOT . '/app/payments/',
    'schemas' => DIR_ROOT . '/app/schemas/',
    'themes_repository' => DIR_ROOT . '/var/themes_repository/',
    'database' => DIR_ROOT . '/var/database/',
    'var' => DIR_ROOT . '/var/',
    'upgrade' => DIR_ROOT . '/var/upgrade/',
    'cache_templates' => DIR_ROOT . '/var/cache/templates/',
    'cache_registry' => DIR_ROOT . '/var/cache/registry/',
    'files' => DIR_ROOT . '/var/files/',
    'cache_misc' => DIR_ROOT . '/var/cache/misc/',
    'cache_static' => DIR_ROOT . '/var/cache/static/',
    'layouts' => DIR_ROOT . '/var/layouts/',
    'snapshots' => DIR_ROOT . '/var/snapshots/',
    'lang_packs' => DIR_ROOT . '/var/langs/',
    'certificates' => DIR_ROOT . '/var/certificates/',
    'store_import' => DIR_ROOT . '/var/store_import/',
    'backups' => DIR_ROOT . '/var/backups/',
);


$config['forbidden_file_extensions'] = array (
    'php',
    'php3',
    'pl',
    'com',
    'exe',
    'bat',
    'cgi',
    'htaccess'
);

$config['forbidden_mime_types'] = array (
    'text/x-php',
    'text/x-perl',
    'text/x-python',
    'text/x-shellscript'
);

$config['js_css_cache_msg'] = "/*
ATTENTION! Please do not modify this file, it's auto-generated and all your changes will be lost.
The complete list of files it's generated from:
[files]
*/

";

$config['base_theme'] = 'responsive';


$config['updates_server'] = 'http://updates.cs-cart.com';


$config['resources'] = array(
    'knowledge_base' => 'http://kb.cs-cart.com/installation',
    'updates_server' => 'http://updates.cs-cart.com',
    'twitter' => 'cscart',
    'feedback_api' => 'http://www.cs-cart.com/index.php?dispatch=feedback',
    'product_url' => 'http://www.cs-cart.com',
    'helpdesk_url' => 'http://www.cs-cart.com/helpdesk',
    'license_url' => 'http://www.cs-cart.com/licenses.html',
    'marketplace_url' => 'http://marketplace.cs-cart.com',
    'admin_protection_url' => 'http://kb.cs-cart.com/adminarea-protection',
    'widget_mode_url' => 'http://kb.cs-cart.com/widget-mode',
    'upgrade_center_specialist_url' => 'http://marketplace.cs-cart.com/developers-catalog.html?services=M',
    'upgrade_center_team_url' => 'https://www.cs-cart.com/index.php?dispatch=communication.tickets&submit_ticket=Y',
    'kb_https_failed_url' => 'http://kb.cs-cart.com/secure-connection-failed',
    
);


$config['debugger_token'] = 'debug';


require_once($config['dir']['root'] . '/config.local.php');


if (!empty($config['saas_uid']) && empty($config['store_prefix'])) {
    $config['store_prefix'] = $config['saas_uid'];
}


$config['current_path'] = (defined('HTTPS')) ? $config['https_path'] : $config['http_path'];

$config['http_location'] = 'http://' . $config['http_host'] . $config['http_path'];
$config['https_location'] = 'https://' . $config['https_host'] . $config['https_path'];
$config['current_location'] = (defined('HTTPS')) ? $config['https_location'] : $config['http_location'];
$config['current_host'] = (defined('HTTPS')) ? $config['https_host'] : $config['http_host'];

$config['allowed_pack_exts'] = array('tgz', 'gz', 'zip');

return $config;
