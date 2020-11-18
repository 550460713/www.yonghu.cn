<?php
namespace app\common\business;

use app\common\model\mysql\Demo as DemoDate;

class Demo {
    
    public function getDemoDateByCategoryId($categoryId,$limit = 10){
        $demoObj = new DemoDate();
        $results = $demoObj->getDemoDateByCategoryId($categoryId,$limit);
        if(empty($results)){
            return [];
        }

        $categorys = config('categorys');
        foreach($results as $key => $result){
            $results[$key]['categoryName'] = $categorys[$result['category_id']] ?? '其他';
        }

        return $results;
    }

}