<?php

define('APP_PATH', realpath(dirname(__FILE__).'/../'));

$loader = new \Phalcon\Loader();
$loader->registerDirs([
    APP_PATH . '/app/controllers/',
    APP_PATH . '/app/libs/',
    APP_PATH . '/app/services/',
    APP_PATH . '/app/models/',
    //    APP_PATH . '/public/',
])->register();

require_once APP_PATH . '/conf/config.php';
require_once APP_PATH . '/conf/define.php';
require_once APP_PATH . '/vendor/autoload.php';

$di = new \Phalcon\DI\FactoryDefault\CLI();

$databaseConnection = Config::databaseConnection();

$di->set(DBCONNECTION_DI_KEY, function() use ($databaseConnection) {
    return Utility::getDatabaseConnection($databaseConnection);
});

$templatesPath = APP_PATH . Config::getTemplatesPath();

$di->set(TEMPLATE_ENGINE_DI_KEY, function() use ($templatesPath) {
    return Utility::getTemplateEngine($templatesPath);
});

$router = new \Phalcon\Mvc\Router();

$router->add(
    "/:controller/:action/:params",
    [
        "controller" => 1,
        "action"     => 2,
        "params"     => 3,
    ]

);

//echo '<pre>';var_dump($router);