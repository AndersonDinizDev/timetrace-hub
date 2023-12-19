<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'teste', 'email' => 'teste@teste.com']);

print_r(User::get(['name' => 'Chaves'], 'name, email'));
// echo "<br/>";
// echo User::getSelect(['name' => 'chaves', 'email' => 'teste@novoteste.com']);
