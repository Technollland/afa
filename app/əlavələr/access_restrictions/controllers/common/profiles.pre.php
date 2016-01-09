<?php
//Mahammad Ismayilzade

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update' || $mode == 'add') {
        if (fn_email_is_blocked($_REQUEST['user_data'], true)) {
            fn_save_post_data('user_data');

            return array(CONTROLLER_STATUS_REDIRECT, 'profiles.update' . ((AREA == 'A' && !empty($_REQUEST['user_id'])) ? '?user_id=' . $_REQUEST['user_id'] : ''));
        }
    }

    return;
}

/** /Body **/
