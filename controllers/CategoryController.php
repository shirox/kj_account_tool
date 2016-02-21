<?php

class CategoryController extends BaseController {

    public function indexAction(){
        
    }

    public function listAction(){

        try {

            $serviceCategory = new ServiceCategory();
        
            $categoryList = $serviceCategory->getListAll();

            $this->view->categoryList = $categoryList;

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Category list controller error.", $e);

            return $this->http->redirect('error');
        }
    }

    public function detailAction(){

        $serviceCategory = new ServiceCategory();

        $categoryDetail = $category->getDetail();
        
        $this->view->categoryDetail = $categoryDetail;

    }

}