<?php

class CategoryController extends BaseController {

    public function indexAction(){
        
    }

    public function ListAction(){
        $categoryList = ModelCategory::find();
        /*
        foreach ($categoryList as $category) {
            
            $this->view->dbg .= print_r($category->getId(),true);
            $this->view->dbg .= print_r($category->getName(),true);
            $this->view->dbg .= print_r($category->getOrderNum(),true);
        }
        */
        $this->view->categoryList = $categoryList;

        
    }

}