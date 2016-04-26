<?php
/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Date: 2016/1/25
 * Time: 17:46
 */

namespace Home\Controller;


use Think\Controller;

class BlogController extends Controller
{
	public function index(){
		$this->display();
	}

	public function test(){
		$this->display();
	}

}