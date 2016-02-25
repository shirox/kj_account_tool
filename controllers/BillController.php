<?php

class BillController extends BaseController {

    public function indexAction(){
        return $this->response->redirect('bill/list');
    }

    public function listAction(){

        try {

            $serviceCategory = new ServiceBill();
        
            $billList = $serviceBill->getList($offset, $limit);

            $this->view->billList = $billList;
            //            $this->view->pager = $pager;
            

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Bill list error.", $e);

            return $this->response->redirect('error');
        }
    }

    public function detailAction(){

        try {
        
            $serviceBill = new ServiceBill();

            $billId = $this->dispatcher->getParam("number");

            $this->view->bill = $serviceBill->getDetail($billId);

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Bill detail error.", $e);

            return $this->response->redirect('error');
        }

    }

    public function appendAction(){

    }

    public function appendnewAction(){

        try {

            if (!$this->request->isPost()) {
                throw new Exception("No post data included.");
            }

            $registData = [
                "categoryName" => $this->request->getPost("categoryName"),
                "categoryOrderNum" => $this->request->getPost("categoryOrderNum"),
            ];

            $serviceCategory = new ServiceCategory();
            $serviceCategory->appendCategory($registData);

            $this->response->redirect('category/list');

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Category append new error.", $e);

            return $this->response->redirect('error');
        }
    }

}