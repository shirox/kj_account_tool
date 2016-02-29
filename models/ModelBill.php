<?php

class ModelBill extends \Phalcon\Mvc\Model {

    protected $id;
    protected $category_id;
    protected $left_amount;
    protected $right_amount;
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

    public function setListId($listId){

        $this->list_id = $listId;
        return $this;
    }

    public function getListId(){

        return $this->list_id;
    }

    public function setCategoryId($id){

        $this->category_id = $id;
        return $this;
    }
    
    public function getCategoryId(){

        return $this->category_id;
    }

    public function setLeftAmount($amount){

        $this->left_amount = $amount;
        return $this;
    }

    public function getLeftAmount(){

        return $this->left_amount;
    }

    public function setRightAmount($amount){

        $this->right_amount = $amount;
        return $this;
    }
    
    public function getRightAmount(){

        return $this->right_amount;
    }

    public function setUptime($uptime){

        $this->uptime = $uptime;
        return $this;
    }

}