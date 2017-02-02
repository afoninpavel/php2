<?php

require __DIR__ . '/avtoload.php';

$users = \App\Models\User::findAll();
var_dump($users);