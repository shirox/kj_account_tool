<?php

class ServiceCategory {

    public function getListAll(){

        try {

            return ModelCategory::find();

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service category getListAll error.", $e);
            throw new Exception();
        }

    }

    public function getDetail($categoryId){

        try {

            if (!is_numeric($categoryId)) {
                throw new Exception("Not integer given to categoryId.");
            }

            $param = [
                "id = :categoryId:",
                "bind" => ["categoryId" => $categoryId],
            ];

            return ModelCategory::findFirst($param);

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Service category getDetail error.", $e);
            throw new Exception();
        }
    }

    public function append(){

    }

    public function appendCategory($registData){

        try {

            $modelCategory = (new ModelCategory())
                           ->setName($registData['categoryName'])
                           ->setStatus($registData['categoryStatus'])
                           ->setOrderNum($registData['categoryOrderNum'])
                           ->save();

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service append category error.", $e);
            throw new Exception();
        }
    }

    public function updateCategory($registData){

        try {

            $modelCategory = (new ModelCategory())
                           ->setId($registData['categoryId'])
                           ->setName($registData['categoryName'])
                           ->setStatus($registData['categoryStatus'])
                           ->setOrderNum($registData['categoryOrderNum'])
                           ->save();

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service update category error.", $e);
            throw new Exception();
        }
    }
}