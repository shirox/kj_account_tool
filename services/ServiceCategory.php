<?php

class ServiceCategory extends ModelCategory {

    public function getList(){

        try {

            $modelCategoryList = $this->getCategoryList();

            /*
              foreach ($categoryList as $category) {
            
              $this->view->dbg .= print_r($category->getId(),true);
              $this->view->dbg .= print_r($category->getName(),true);
              $this->view->dbg .= print_r($category->getOrderNum(),true);
              }
            */

            return $modelCategoryList;

        } catch (Exception $e) {
            
            var_dump($e);

        }

    }

    public function updateCategoryList(){}
    public function deleteCategoryList(){}
    public function createCategoryList(){}


}