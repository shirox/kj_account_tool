<?php

class ErrorController extends BaseController{

    public function indexAction(){

        $this->view->errorMessage = "Sorry, error happend.";
    }
}