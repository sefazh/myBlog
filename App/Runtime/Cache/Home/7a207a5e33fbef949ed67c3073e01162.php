<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myblog2</title>
    <!-- bootstrap start -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="/Public/css/font-awesome-ie7.min.css">
    <![endif]-->
    <script type="text/javascript" src="/Public/js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/js/holder.min.js"></script>
    <!-- bootstrap end -->
    <link rel="stylesheet" href="/Public/css/style.css">
	<link rel="stylesheet" href="/Public/css/test.css">
</head>
<body>
<div class="toolbar">
    <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="icon-github"></i></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#Action">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="写点什么...">
                        </div>
                        <button type="submit" class="btn btn-default">查询</button>
                    </form>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
</div>
<div class="main_body">
<div class="container">
    <div class="main col-md-8">
        <!--第一篇 开始-->
        <div class="article">
            <div class="article_head">
                <h1><a href="">PHP 7.0.0正式版发布了</a></h1>
                <div class="article_meta"><span>作者：王赛</span> •<time>日期：2015年12月4日</time></div>
            </div>
            <div class="article_media">

                <ul class="window list-unstyled">
                    <!--msg start-->
                    <!--<li class="msg-li">
                        <div class="msg-head">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <div class="msg-content">msg-content</div>
                    </li>-->
                    <!--msg end-->
                </ul>
            </div>
            <div class="article_content">

            </div>
            <div class="article_foot clearfix">
                <div class="shoutbox">
                    <div class="col-md-10">
                        <textarea name="text_content" id="text_content" cols="30" rows="3" maxlength="80" placeholder="说点什么..." class="form-control"></textarea>
                    </div>
                    <div class="col-md-2">
                        <input type="button" value="Enter" class="btn btn-default btn-block">
                    </div>
                </div>
            </div>
        </div>
        <!--第一篇 结束-->

    </div>

    <div class="right col-md-4">
        <!--第一个模块 开始-->
        <div class="widget">
            <h4 class="title">公告</h4>
            <div class="widget_content">
                <p>qwertyuiop</p>
                <p>PHP 7.0.0正式版发布了</p>
            </div>
        </div>
        <!--第一个模块 结束-->
        <div class="widget">
            <h4 class="title">按钮</h4>
            <div class="widget_content">
                <a href="" class="btn btn-default btn-block">按钮</a>
            </div>
        </div>
        <div class="widget">
            <h4 class="title">按钮</h4>
            <div class="widget_content">
                <a href="" class="btn btn-default btn-block">按钮1</a>
                <a href="" class="btn btn-default btn-block">按钮2</a>
                <a href="" class="btn btn-default btn-block">按钮3</a>
            </div>
        </div>
        <!--<div class="widget">
            <h4 class="title">标签</h4>
            <div class="widget_content tag-cloud">
                <a class="tag">PHP</a>
                <a class="tag">Laravel</a>
                <a class="tag">新版本</a>
                <a class="tag">PHP</a>
                <a class="tag">Laravel</a>
                <a class="tag">新版本</a>
                <a class="tag">PHP</a>
                <a class="tag">Laravel</a>
                <a class="tag">新版本</a>
                <a class="tag">PHP</a>
                <a class="tag">Laravel</a>
                <a class="tag">新版本</a>
                <a class="tag">PHP</a>
                <a class="tag">Laravel</a>
                <a class="tag">新版本</a>
            </div>
        </div>-->
    </div>
</div>
</div>
<script type="text/javascript">
    var host = "ws://127.0.0.1:1144";
    var isConnect = false;
    var socket;

    $(function(){
        initWebSocket();
        $('.shoutbox .col-md-2 .btn').bind('click',function() {
            sendMsg();
        });
        $('#text_content').bind('keydown',function(evt) {
            if(evt.keyCode == 13) {
                evt.preventDefault();
                sendMsg();
            }
        });
    });

    /* websocket */
    function initWebSocket() {
        try {
            socket = new WebSocket(host);

            socket.onopen = function(evt) {
                console.log('websocket 链接成功');
                isConnect = true;
            };

            socket.onmessage = function(evt) {
                var data = JSON.parse(evt.data);
                switch (data.type) {
                    case 'text':
                        addMsg(data.msg);
                        break;
                    case 'num' :
                        //updataUserNum(data.msg);
                        break;
                };
            };

            socket.onerror = function(evt) {

            };

            socket.onclose = function(evt) {

            };
        }
        catch(ex) {
            console.log(ex);
        }
    }

    /* 显示信息 */
    function addMsg(data) {
        data = JSON.parse(data);
        var li = createMsgLi(data.text);
        var msg_window = $('.window');
        li.appendTo(msg_window);
        msg_window.scrollTop(msg_window[0].scrollHeight);
    }

    /* 生成消息节点 */
    function createMsgLi(data) {
        var li = $('<li>').addClass('msg-li');
        var head = $('<div>').addClass('msg-head');
        $('<span>').addClass('glyphicon glyphicon-user').appendTo(head);
        var content = $('<div>').addClass('msg-content').html(data);
        li.append(head).append(content);
        return li;
    }

    /* 发送消息 */
    function sendMsg() {
        var msg = $('#text_content').val();
        if(msg == '') {
            alert('不能发送空消息');
        }else{
            if(isConnect) {
                socket.send($('#text_content').val());
            }
        }
        $('#text_content').val('');
    }

</script>


</body>
</html>