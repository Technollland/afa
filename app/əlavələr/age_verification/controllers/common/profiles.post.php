<?php
//Mahammad Ismayilzade

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update' && !empty($_SESSION['auth']['user_id'])) {
        $data['birthday'] = db_get_field("SELECT birthday FROM ?:users WHERE user_id = ?i", $_SESSION['auth']['user_id']);

        fn_age_verification_check_age($data);
    }
}
