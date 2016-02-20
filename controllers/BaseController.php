<?php

class BaseController extends \Phalcon\Mvc\Controller{

    protected $debug;

    public function initialize(){

        $this->view->project_name = PROJECT_NAME;
    }

    public function debug($obj){
        $debug = new \Phalcon\Debug\Dump();
        $this->view->debug = $debug->variables($obj);
    }

}