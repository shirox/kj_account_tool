<?php

class ModelCategory extends \Phalcon\Mvc\Model {

    protected $id;

    protected $name;

    protected $order_num;

    public function initialize(){

        $this->setSource("categories");
    }

    public function getId(){

        return $this->id;
    }

    public function setName($name){

        $this->name = $name;
    }
    
    public function getName(){

        return $this->name;
    }

    public function setOrderNum($num){

        $this->order_num = $num;
    }
    
    public function getOrderNum(){

        return $this->order_num;
    }



}