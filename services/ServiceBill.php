<?php

class ServiceBill {

    public function getList($offset, $limit){

        try {

            $billList = ModelCategory::find(/*offset limit*/);

            return $billList;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill getList error.", $e);

            throw new Exception();
        }

    }

    public function getListByCategoryId($categoryId, $offset, $limit){

        try {

            $billList = ModelCategory::find(/*categoryId offset limit*/);

            return $billList;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill getListByCategoryId error.", $e);

            throw new Exception();
        }

    }

    public function getDetail($billId){

        try {

            if (!is_numeric($billId)) {
                throw new Exception("Not integer given to billId.");
            }

            $param = [
                "id = :billId:",
                "bind" => ["billId" => $billId],
            ];

            return ModelBill::findFirst($param);

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Service bill getDetail error.", $e);
        }

    }

    public function append(){

    }

    public function appendCategory($registData){

        try {

            $modelCategory = (new ModelCategory())
                           ->setName($registData['categoryName'])
                           ->setOrderNum($registData['categoryOrderNum'])
                           ->save();

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service append category error.", $e);
        }

    }

}