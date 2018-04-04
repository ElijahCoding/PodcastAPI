<?php

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = (new \Dotenv\Dotenv(__DIR__ . '/../'))->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    //
}


require_once __DIR__ . '/database.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['fractal'] = function () {
  return new \League\Fractal\Manager();
};

require_once __DIR__ . '/../routes/api.php';
