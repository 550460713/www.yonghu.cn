<?php
namespace app\common\model\mysql;

use think\Model;

class Demo extends Model {

    public function getDemoDateByCategoryId($categoryId,$limit = 10){
        $results = $this->where('category_id',$categoryId)
        ->limit($limit)
        ->order('id','desc')
        ->select()
        ->toArray();

        return $results;
    }
}