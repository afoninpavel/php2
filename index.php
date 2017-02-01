<?php

require __DIR__ . '/avtoload.php';

$db = new \App\Db();
$res = $db->execute('CREATE TABLE person (id SERIAL)');
var_dump($res);