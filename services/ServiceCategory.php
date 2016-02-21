<?php

class ServiceCategory {

    public function getListAll(){

        try {

            $categoryList = ModelCategory::find();

            return $categoryList;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service category getListAll error.", $e);

            throw new Exception();
        }

    }

    public function getDetail($categoryId){

        try {

            $param = [
                "id" => $categoryId,
            ];

            $categoryDetail = ModelCategory::find($param);

            return $categoryDetail;

        } catch (Exception $e) {
            
            Log::output(LOG_LEVEL_CRITICAL, "Service category getDetail error.", $e);
        }

    }

}