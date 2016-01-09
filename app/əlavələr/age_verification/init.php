<?php
//Mahammad Ismayilzade

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'get_products',
    'get_user_info',
    'get_categories',
    'update_profile',
    'update_user_pre'
);
