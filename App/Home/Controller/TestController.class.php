<?php
/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Corp: Songheng
 * Date: 2016/2/18
 */

namespace Home\Controller;


use Think\Controller;

class TestController extends Controller
{
    public function index() {
        call_user_func_array(array(__NAMESPACE__.'\Test','fun1'),array('123'));
    }

    public function fun1($a) {
        echo '1个参数:'.$a;
    }
    public function fun2($a,$b) {
        echo '2个参数';
    }
    public function fun3($a,$b,$c) {
        echo '3个参数';
    }
}
