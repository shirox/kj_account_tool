<?php

class BaseController extends \Phalcon\Mvc\Controller{

    public function initialize(){

        // Init debug variable for PHP Notice Error.
        $this->view->debug = "";

        // Templates title tag.
        $this->view->project_name = PROJECT_NAME;
        
    }

}