<?php

class ModelCategory extends \Phalcon\Mvc\Model {

    protected $id;
    protected $name;
    protected $status;
    protected $order_num;

    public function initialize(){

        $this->setSource("categories");
    }

    public function setId($id){

        $this->id = $id;
        return $this;
    }

    public function getId(){

        return $this->id;
    }

    public function setName($name){

        $this->name = $name;
        return $this;
    }
    
    public function getName(){

        return $this->name;
    }

    public function setStatus($status){

        $this->status = $status;
        return $this;
    }

    public function getStatus(){

        return $this->status;
    }

    public function setOrderNum($num){

        $this->order_num = $num;
        return $this;
    }
    
    public function getOrderNum(){

        return $this->order_num;
    }

}