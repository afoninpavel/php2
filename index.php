<?php

require __DIR__ . '/avtoload.php';

$db = new \App\Db();
$res = $db->query('SELECT * FROM foo');
var_dump($res);