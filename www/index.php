<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'teste', 'email' => 'teste@teste.com']);

print_r($user);
echo '<br/><br/>';
$user->email = 'teste@novo.com';
print_r($user->email);