<?php

class Utility {

    public static function getDatabaseConnection($databaseConnectionConfig) {
        
        $try_count = 0;
        
        while (true) {

            if ($try_count > MAX_CONNECT_TRY_COUNT) {
                break;
            }

            try {

                $connection = new \Phalcon\Db\Adapter\Pdo\Mysql($databaseConnectionConfig);

                return $connection;

            } catch (Exception $e) {

                $try_count++;
            }

            sleep(CONNECT_TRY_SLEEP_SECONDS);
        }

        throw new PDOException("RDBMS Connection Timeout.");
    }

    public static function getTemplateEngine($templatesPath) {

        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir($templatesPath);
        $view->registerEngines([
            ".volt" => function($view) {
                $volt = new \Phalcon\Mvc\View\Engine\Volt($view);
                $volt->setOptions([
                    'compileAlways' => TEMPLATE_COMPILE_ALWAYS,
                ]);
                $volt->getCompiler()->addFunction('number_format','number_format');
                return $volt;
            }
        ]);

        return $view;
    }

}