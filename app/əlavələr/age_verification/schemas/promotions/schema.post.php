<?php
//Mahammad Ismayilzade

$schema['conditions']['birthday'] = array(
    'type' => 'statement',
    'field_function' => array('fn_age_verification_birthday_promo', '@auth'),
    'zones' => array('cart')
);

return $schema;
