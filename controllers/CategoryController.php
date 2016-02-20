<?php

class CategoryController extends BaseController {

    public function indexAction(){
        
    }

    public function ListAction(){

        $category = new ServiceCategory();

        $categoryList = $category->getList();

        $this->view->categoryList = $categoryList;

    }
}