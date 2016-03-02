<?php

class ServiceBill {

    public function getList(){

        try {

            return ModelBillList::find();

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill getList error.", $e);
            throw new Exception();
        }
    }

    public function getListById($billListId){

        try {

            $billListData = ModelBillList::findFirst($billListId);
            $returnData->listId = $billListData->id;
            $returnData->listName = $billListData->name;

            return $returnData;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill getListById error.", $e);
            throw new Exception();
        }
    }

    public function getData($billListId){

        try {

            $categoryList = ModelCategory::query()
                          ->columns(["id as category_id", "name as category_name"])
                          ->where("status = :status:")
                          ->bind(["status" => CATEGORY_STATUS_ON])
                          ->execute();

            foreach ($categoryList as $data) {
                $data->sum_left_amount = 0;
                $data->sum_right_amount = 0;
                $returnData[$data->category_id] = $data;
            }

            $columns = [
                "category_id",
                "sum(left_amount) as sum_left_amount",
                "sum(right_amount) as sum_right_amount",
                "(select ModelCategory.name from ModelCategory where ModelCategory.id=category_id and ModelCategory.status=".CATEGORY_STATUS_ON.") as category_name",
            ];

            $billData = ModelBill::query()
                      ->columns($columns)
                      ->where("list_id = :billListId:")
                      ->bind(["billListId" => $billListId])
                      ->groupBy("category_id")
                      ->execute();

            $leftTotal = 0;
            $rightTotal = 0;
            foreach ($billData as $data) {
                if (empty($data->category_name)) {
                    continue;
                }
                $returnData[$data->category_id] = $data;
                $leftTotal += $data->sum_left_amount;
                $rightTotal += $data->sum_right_amount;
            }

            $isRed = "";
            if ($leftTotal != $rightTotal) {
                $isRed = "red";
            }

            return [$returnData, $leftTotal, $rightTotal, $isRed];

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill get data error.", $e);
            throw new Exception();
        }
    }

    public function append($registData){

        try {

            $modelBill = (new ModelBill())
                           ->setlistId($registData['list_id'])
                           ->setCategoryId($registData['category_id']);

            if (is_numeric($registData['left_amount'])) {
                $modelBill->setLeftAmount($registData['left_amount']);
            }
            if (is_numeric($registData['right_amount'])) {
                $modelBill->setRightAmount($registData['right_amount']);
            }
            $modelBill->save();

            return true;

        } catch(Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service append category error.", $e);
            throw new Exception();
        }
    }

    public function getHistory(){

        try {

            $columns = [
                "id",
                "list_id",
                "category_id",
                "left_amount",
                "right_amount",
                "uptime",
                "(select ModelCategory.name from ModelCategory where ModelCategory.id=category_id) as category_name",
                "(select ModelBillList.name from ModelBillList where ModelBillList.id=list_id) as list_name",
            ];

            $billData = ModelBill::query()
                      ->columns($columns)
                      ->execute();

            return $billData;

        } catch (Exception $e) {

            Log::output(LOG_LEVEL_CRITICAL, "Service bill get data error.", $e);
            throw new Exception();
        }
    }

}