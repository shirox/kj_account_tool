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

            $categoryData= $serviceCategory->getDetail($categoryId);
            $this->view->category = $categoryData;
            $this->view->select = $categoryData->getStatus();

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Category detail error.", $e);

            return $this->response->redirect('error');
        }

    }

    public function appendAction(){
        // For append form action.
    }

    public function appendnewAction(){

        try {

            if (!$this->request->isPost()) {
                throw new Exception("No post data included.");
            }

            $registData = [
                "categoryName" => $this->request->getPost("categoryName"),
                "categoryOrderNum" => $this->request->getPost("categoryOrderNum"),
                "categoryStatus" => $this->request->getPost("categoryStatus"),
            ];

            $serviceCategory = new ServiceCategory();
            $serviceCategory->appendCategory($registData);

            $this->response->redirect('category/list');

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Category append new error.", $e);

            return $this->response->redirect('error');
        }
    }

    public function updateAction(){

        try {

            if (!$this->request->isPost()) {
                throw new Exception("No post data included.");
            }

            $registData = [
                "categoryId" => $this->request->getPost("categoryId"),
                "categoryName" => $this->request->getPost("categoryName"),
                "categoryOrderNum" => $this->request->getPost("categoryOrderNum"),
                "categoryStatus" => $this->request->getPost("categoryStatus"),
            ];

            $serviceCategory = new ServiceCategory();
            $serviceCategory->updateCategory($registData);

            $this->response->redirect('category/list');

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Category update error.", $e);

            return $this->response->redirect('error');
        }
    }

}