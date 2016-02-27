<?php

class ServiceBill {

    public function getList(){

        try {

            $billList = ModelBillList::find();

            return $billList;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill getList error.", $e);

            throw new Exception();
        }

    }

    public function getData($billListId){

        try {

            $billData = ModelBill::find();

            return $billData;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill get data error.", $e);

            throw new Exception();
        }

    }

    public function getListByCategoryId($categoryId, $offset, $limit){

        try {

            $billList = ModelBill::find(/*categoryId offset limit*/);

            return $billList;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill getListByCategoryId error.", $e);

            throw new Exception();
        }

    }

    public function getDetail($billListId){

        try {

            if (!is_numeric($billListId)) {
                throw new Exception("Not integer given to billListId.");
            }

            $param = [
                "id = :billListId:",
                "bind" => ["billListId" => $billListId],
            ];

            return ModelBill::find($param);

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Service bill list getDetail error.", $e);
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