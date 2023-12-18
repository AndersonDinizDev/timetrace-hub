<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php');

$sql = 'SELECT * FROM users';
$result = Database::getResultFromQuery($sql);

print_r($result);
