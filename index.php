<?php

require __DIR__ . '/avtoload.php';

$db = new \App\Db();
$res = $db->query('SELECT * FROM users ');
var_dump($res);