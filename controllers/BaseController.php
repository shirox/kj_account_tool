<?php

class BaseController extends \Phalcon\Mvc\Controller{

    public function initialize(){
        
        $this->view->project_name = PROJECT_NAME;
    }

}