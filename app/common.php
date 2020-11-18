<?php
// 应用公共文件

/**
 * @name: 通用化API返回数据格式
 * @test: test font
 * @msg: 
 * @param {*}
 * @return {*}
 */
function show($status,$message='',$result=null,$httpStatus=202){
    $data = [
        'status' => $status,
        'message' => $message,
        'result' => $result
    ];
    return json($data,$httpStatus);
}