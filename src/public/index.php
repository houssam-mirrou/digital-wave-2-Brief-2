<?php

session_start();

require __DIR__ . '/../classes/Database.php';

$config = require __DIR__ . '/../classes/config.php';


$data = new Database($config['database']);

require __DIR__ . '/../functions.php';
require __DIR__ . '/../router.php';
