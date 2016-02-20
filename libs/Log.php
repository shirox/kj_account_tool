<?php

class Log{

    public function output($level, $message, $exception=null){

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

        $logger->$level(json_encode($output));

    }

}