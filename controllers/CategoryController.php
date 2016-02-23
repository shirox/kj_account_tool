<?php

class CategoryController extends BaseController {

    public function indexAction(){
        return $this->response->redirect('category/list');
    }

    public function listAction(){

        try {

            $serviceCategory = new ServiceCategory();
        
            $categoryList = $serviceCategory->getListAll();

            $this->view->categoryList = $categoryList;

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Category list error.", $e);

            return $this->response->redirect('error');
        }
    }

    public function detailAction(){

        try {
        
            $serviceCategory = new ServiceCategory();

            $categoryId = $this->dispatcher->getParam("number");

            $this->view->category = $serviceCategory->getDetail($categoryId);

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Category detail error.", $e);

            return $this->response->redirect('error');
        }

    }

}