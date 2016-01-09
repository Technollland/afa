<?php
//Mahammad Ismayilzade

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (($mode == 'customer_info' || $mode == 'add_profile') && !empty($_REQUEST['user_data']['birthday'])) {
        $_REQUEST['user_data']['birthday'] = fn_parse_date($_REQUEST['user_data']['birthday']);
    }
}
