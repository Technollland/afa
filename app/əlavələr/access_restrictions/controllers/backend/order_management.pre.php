<?php
//Mahammad Ismayilzade

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$suffix = !empty($cart['order_id']) ? '.update' : '.add';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($mode == 'place_order' && !empty($_REQUEST['payment_info']['card_number'])) {
        if (fn_card_number_is_blocked($_REQUEST['payment_info']['card_number'])) {
            fn_set_notification('E', __('error'), __('text_cc_number_is_blocked', array(
                '[cc_number]' => $_REQUEST['payment_info']['card_number']
            )));

            return array(CONTROLLER_STATUS_REDIRECT, 'order_management' . $suffix);
        }

    } elseif ($mode == 'customer_info') {
        if (fn_email_is_blocked($_REQUEST['user_data'])) {
            fn_save_post_data('user_data');

            return array(CONTROLLER_STATUS_REDIRECT, 'order_management' . $suffix);
        }
    }
}
