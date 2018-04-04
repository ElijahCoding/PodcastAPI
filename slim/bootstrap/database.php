<?php

$capsule = new \Illuminate\Database\Capsule\Manager;

$capsule->addConnection([
  'driver' => 'pgsql',
  'host' => 'localhost',
  'database' => 'Podcast',
  'username' => 'homestead',
  'password' => 'secret',
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
