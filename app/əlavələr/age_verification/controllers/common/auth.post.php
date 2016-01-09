<?php
//Mahammad Ismayilzade

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'login') {
    if (!empty($_SESSION['auth']['user_id'])) {
        $u_data = db_get_row("SELECT birthday, status FROM ?:users WHERE user_id = ?i", $_SESSION['auth']['user_id']);

        fn_age_verification_check_age($u_data);
    }
}
