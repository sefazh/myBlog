<?php
/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Corp: Songheng
 * Date: 2016/2/1
 */

namespace Home\Controller;


use Think\Controller;

class RoomController extends Controller
{
    public function index() {

        $this->display();
    }
    /*
     * php中的socket连接整个过程
     */
    public function linkSocket() {
        set_time_limit(0);

        $ip = '127.0.0.1';
        $port = 1234;

        $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
        if($socket < 0) {
            echo "socket_create() failed: reason: " . socket_strerror($socket) . "\n";
        }

        $return  = socket_bind($socket,$ip,$port);
        if($return < 0) {
            echo "socket_bind() failed: reason: " . socket_strerror($return) . "\n";
        }

        $listen = socket_listen($socket,4);
        if($listen < 0) {
            echo "socket_listen() failed: reason: " . socket_strerror($listen) . "\n";
        }

        $count = 0;

        //监听
        do {
            $msgsock = socket_accept($socket);
            if($msgsock < 0) {
                echo "socket_accept() failed: reason: " . socket_strerror($msgsock) . "\n";
                break;
            } else {
                //接受成功，想客户端返回信息
                $msg = "test success\n";
                socket_write($msgsock,$msg,strlen($msg));

                $buf = socket_read($msgsock,8192);

                $backmsg = "recept message:$buf\n";
                echo $backmsg;

                if(++$count >= 5) {
                    break;
                }
            }

            socket_close($msgsock);

        } while (true);

        socket_close($socket);
    }

    public function info() {
        phpinfo();
    }
}