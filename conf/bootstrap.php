<?php

$loader = new \Phalcon\Loader();
$loader->registerDirs([
    '../controllers/',
    '../libs/',
    '../services/',
    '../models/',
])->register();

require_once '../conf/config.php';
require_once '../conf/define.php';
require_once '../vendor/autoload.php';

$di = new \Phalcon\DI\FactoryDefault();

$di->set(TEMPLATE_ENGINE_DI_KEY, function() {
    return Utility::getTemplateEngine('../views/');
});

$databaseConnection = Config::databaseConnection();
$di->set(DBCONNECTION_DI_KEY, function() use ($databaseConnection) {
    return Utility::getDatabaseConnection($databaseConnection);
});

$app = new \Phalcon\Mvc\Application($di);
echo $app->handle()->getContent();
