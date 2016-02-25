<?php

class ModelBill extends \Phalcon\Mvc\Model {

    protected $id;
    protected $category_id;
    protected $amount;
    protected $uptime;

    public function initialize(){

        $this->setSource("bills");
    }

    public function setId($id){

        $this->id = $id;
        return $this;
    }

    public function getId(){

        return $this->id;
    }

    public function setCategoryId($id){

        $this->category_id = $id;
        return $this;
    }
    
    public function getCategoryId(){

        return $this->category_id;
    }

    public function setAmount($amount){

        $this->amount = $amount;
        return $this;
    }
    
    public function getAmount(){

        return $this->amount;
    }

    public function setUptime($uptime){

        $this->uptime = $uptime;
        return $this;
    }

}