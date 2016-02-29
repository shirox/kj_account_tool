<?php

class Log{

    public static function output($level, $message, $exception=null){

        $errorMessage = "";
        $stackTrace = "";

        $logger = new \Phalcon\Logger\Adapter\File(SYSTEM_LOG_PATH);

        if ($exception) {

            $errorMessage = $exception->getMessage();
            $stackTrace = $exception->getTraceAsString();
        }
        
        $output = [
            "message" => $message,
            "errorMessage" => $errorMessage,
            "stackTrace" => $stackTrace,
        ];

        $logger->$level(print_r($output, true));

    }
    
    public static function debug($target){

        self::output(LOG_LEVEL_DEBUG, $target);
    }

}