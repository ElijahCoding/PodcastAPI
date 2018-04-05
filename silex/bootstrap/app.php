<?php

require_once __DIR__ . '/../vendor/autoload.php';


try {
    $dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
    $dotenv->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    //
}

require_once __DIR__ . '/database.php';

$app = new Silex\Application([
    'debug' => true
]);

require_once __DIR__ . '/../routes/api.php';
