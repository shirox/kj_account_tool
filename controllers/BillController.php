<?php

class BillController extends BaseController {

    public function indexAction(){
        return $this->response->redirect('bill/list');
    }

    public function listAction(){

        try {

            $serviceBill = new ServiceBill();
            $billList = $serviceBill->getList();
            $this->view->billList = $billList;

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Bill lists error.", $e);

            return $this->response->redirect('error');
        }
    }

    public function mainAction(){

        try {

            $serviceBill = new ServiceBill();

            $billListId = $this->dispatcher->getParam("number");
            $billData = $serviceBill->getData($billListId);

            $this->view->billData = $billData;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Get bill list data error.", $e);

            return $this->response->redirect('error');
        }
    }

}