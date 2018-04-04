<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'debug' => true
]);

require_once __DIR__ . '/../routes/api.php';
