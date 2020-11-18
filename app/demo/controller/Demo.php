<?php
/*
 * @实现场景：获取URL参数，查询相关栏目
 * @version: 
 * @Author: sueRimn
 * @Date: 2020-11-18 09:06:45
 * @LastEditors: sueRimn
 * @LastEditTime: 2020-11-18 10:03:47
 */
namespace app\demo\controller;

use app\BaseController;
use app\common\business\Demo as Demobusiness;

class Demo extends BaseController {
    public function index(){
        $categoryId = $this->request->param('id',1,'intval');
        if(empty($categoryId)) {
            return show(config('status.error'),'参数不正确',null,404);
        }

        $DemoObj = new Demobusiness();
        $results = $DemoObj->getDemoDateByCategoryId($categoryId,10);

        if(empty($results)){
            return show(config('status.error'),'栏目不存在',null,404);
        }else{
            return show(config('status.success'),'ok',$results,200);
        }
    }
}