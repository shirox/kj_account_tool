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
            list($billData, $billLeftTotal, $billRightTotal, $isRed) = $serviceBill->getData($billListId);
            $billListData = $serviceBill->getListById($billListId);

            $this->view->billData = $billData;
            $this->view->billLeftTotal = $billLeftTotal;
            $this->view->billRightTotal = $billRightTotal;
            $this->view->isRed = $isRed;
            $this->view->billListData = $billListData;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Get bill list data error.", $e);
            return $this->response->redirect('error');
        }
    }

    public function appendAction(){

        try {

            if (!$this->request->isPost()) {
                throw new Exception("No post data included.");
            }

            $listId = $this->request->getPost("listId");

            $registData = [
                "list_id" => $listId,
                "category_id" => $this->request->getPost("categoryId"),
                "left_amount" => $this->request->getPost("leftAmount"),
                "right_amount" => $this->request->getPost("rightAmount"),
            ];

            $serviceBill = new ServiceBill();
            $serviceBill->append($registData);

            return $this->response->redirect('bill/main/'.$listId);

        } catch(Exeption $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Append bill list data error.", $e);
            return $this->response->redirect('error');
        }

    }

    public function historyAction(){

        try {

            $serviceBill = new ServiceBill();
            $billList = $serviceBill->getHistory();
            $this->view->billList = $billList;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Bill history lists error.", $e);
            return $this->response->redirect('error');
        }
    }

    public function deleteAction(){

        try {

            $billId = $this->dispatcher->getParam("number");

            $serviceBill = new ServiceBill();
            $serviceBill->deleteBill($billId);

            return $this->response->redirect('bill/history');

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Bill history lists error.", $e);
            return $this->response->redirect('error');
        }
    }

    public function listAppendAction(){

        try {

            $serviceBill = new ServiceBill();
            $serviceBill->appendList();

            return $this->response->redirect('bill/list');

        } catch(Exeption $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Append bill list error.", $e);
            return $this->response->redirect('error');
        }

    }

}