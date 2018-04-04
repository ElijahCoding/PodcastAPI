<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__  . '/database.php';

$app = new \Slim\App([
    'debug' => true
]);

require_once __DIR__ . '/../routes/api.php';
