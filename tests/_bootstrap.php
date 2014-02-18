<?php
// This is global bootstrap for autoloading 
include __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/start.php';

//Remove comments to add AspectMock support. Requires PHP >= 5.4
//$kernel = \AspectMock\Kernel::getInstance();
//$kernel->init(array(
//    'debug' => true,
//    //'includePaths' => [__DIR__.'/../src']
//    'includePaths' => array(__DIR__.'/../app/models')
//));
