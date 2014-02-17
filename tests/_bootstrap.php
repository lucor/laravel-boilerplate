<?php
// This is global bootstrap for autoloading 
include __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/start.php';

$kernel = \AspectMock\Kernel::getInstance();
$kernel->init([
    'debug' => true,
    //'includePaths' => [__DIR__.'/../src']
    'includePaths' => [__DIR__.'/../app/models']
]);