<?php

define('APP_PATH', realpath(dirname(__FILE__).'/../'));

$loader = new \Phalcon\Loader();
$loader->registerDirs([
    APP_PATH . '/controllers/',
    APP_PATH . '/libs/',
    APP_PATH . '/services/',
    APP_PATH . '/models/',
    APP_PATH . '/public/',
])->register();

require_once APP_PATH . '/conf/config.php';
require_once APP_PATH . '/vendor/autoload.php';
