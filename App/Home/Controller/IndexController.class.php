<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize() {
        $this->assign('con1', 'active');
    }

    public function Index(){
        $this->display();
    }
}