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
	<link rel="stylesheet" href="/Public/css/common.css">
    <script type="text/javascript" src="/Public/js/common.js"></script>
</head>
<body>
<div class="toolbar">
    <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/home/index/index"><i class="icon-globe icon-2x col-xs-1"></i>SefaZh</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/home/index/index">首页</a></li>
                        <li><a href="/home/blog/index">列表</a></li>
                        <li><a href="#contact">标签云</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">其他 <span class="caret"></span></a>
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
<div class="blank" style="width: 100%; height: 51px;"></div>
<div class="main_body">
<div class="container">
    <div class="main col-md-8">
        <!--第一篇 开始-->
        <div class="article">
            <div class="article_head">
                <h1><a href="">PHP 7.0.0正式版发布了</a></h1>
                <div class="article_meta">作者：<span>王赛</span> •日期：<time>2015年12月4日</time></div>
            </div>
            <div class="article_media">
                <img src="/Public/img/php7.png" alt="">
            </div>
            <div class="article_content">
                <p>PHP 团队宣布 PHP 7.0.0 正式发布了。这一版本的发布标志着 PHP 7 新系列开始了。 PHP 7.0.0 带来了新版本的 Zend 引擎、各方面的提升以及新特性，比如： 性能提升：PHP 7 是 PHP 5.6 的将近两倍 内存的使用显著降低 抽象语法树 一致的 64 位支持 许多重大的错误转为异常 安全</p>
            </div>
            <div class="article_link">
                <a href="" class="btn btn-default">阅读全文</a>
            </div>
            <div class="article_foot clearfix">
                <div class="tablist">
                    <i class="icon-tags"></i>
                    <a>PHP</a>
                    <a>新版本</a>
                </div>
            </div>
        </div>
        <!--第一篇 结束-->

        <div class="article">
            <div class="article_head">
                <h1><a href="">Laravel 5.2 要发布了，来看看都有哪些新特性吧</a></h1>
                <div class="article_meta"><span>作者：王赛</span> •<time>日期：2015年12月4日</time></div>
            </div>
            <div class="article_media">
                <img src="/Public/img/laravel5.2.png" width="100%" alt="">
            </div>
            <div class="article_content">
                <p>Laravel 5.2 即将发布！它带来了哪些新特性？我们根据 Laravel 创始人 Taylor Otwell 在 Twitter 上发布的推文一起来梳理一下吧： 中间件组（Middleware Groups） 中间件组也许是你最希望得到的新特性，这一特性允许你为路由（route）设置一组中间件： 支持 MySQL</p>
            </div>
            <div class="article_link">
                <a href="" class="btn btn-default">阅读全文</a>
            </div>
            <div class="article_foot clearfix">
                <div class="tablist">
                    <i class="icon-tags"></i>
                    <a>Laravel</a>
                    <a>新版本</a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="article_head">
                <h1><a href="">PHP 7.0.0正式版发布了</a></h1>
                <div class="article_meta"><span>作者：王赛</span> •<time>日期：2015年12月4日</time></div>
            </div>
            <div class="article_media">
                <img src="/Public/img/php7.png" width="100%" alt="">
            </div>
            <div class="article_content">
                <p>PHP 团队宣布 PHP 7.0.0 正式发布了。这一版本的发布标志着 PHP 7 新系列开始了。 PHP 7.0.0 带来了新版本的 Zend 引擎、各方面的提升以及新特性，比如： 性能提升：PHP 7 是 PHP 5.6 的将近两倍 内存的使用显著降低 抽象语法树 一致的 64 位支持 许多重大的错误转为异常 安全</p>
            </div>
            <div class="article_link">
                <a href="" class="btn btn-default">阅读全文</a>
            </div>
            <div class="article_foot clearfix">
                <div class="tablist">
                    <i class="icon-tags"></i>
                    <a>PHP</a>
                    <a>新版本</a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="article_head">
                <h1><a href="">PHP 7.0.0正式版发布了</a></h1>
                <div class="article_meta"><span>作者：王赛</span> •<time>日期：2015年12月4日</time></div>
            </div>
            <div class="article_media">
                <img src="/Public/img/php7.png" width="100%" alt="">
            </div>
            <div class="article_content">
                <p>PHP 团队宣布 PHP 7.0.0 正式发布了。这一版本的发布标志着 PHP 7 新系列开始了。 PHP 7.0.0 带来了新版本的 Zend 引擎、各方面的提升以及新特性，比如： 性能提升：PHP 7 是 PHP 5.6 的将近两倍 内存的使用显著降低 抽象语法树 一致的 64 位支持 许多重大的错误转为异常 安全</p>
            </div>
            <div class="article_link">
                <a href="" class="btn btn-default">阅读全文</a>
            </div>
            <div class="article_foot clearfix">
                <div class="tablist">
                    <i class="icon-tags"></i>
                    <a>PHP</a>
                    <a>新版本</a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="article_head">
                <h1><a href="">PHP 7.0.0正式版发布了</a></h1>
                <div class="article_meta"><span>作者：王赛</span> •<time>日期：2015年12月4日</time></div>
            </div>
            <div class="article_media">
                <img src="/Public/img/php7.png" width="100%" alt="">
            </div>
            <div class="article_content">
                <p>PHP 团队宣布 PHP 7.0.0 正式发布了。这一版本的发布标志着 PHP 7 新系列开始了。 PHP 7.0.0 带来了新版本的 Zend 引擎、各方面的提升以及新特性，比如： 性能提升：PHP 7 是 PHP 5.6 的将近两倍 内存的使用显著降低 抽象语法树 一致的 64 位支持 许多重大的错误转为异常 安全</p>
            </div>
            <div class="article_link">
                <a href="" class="btn btn-default">阅读全文</a>
            </div>
            <div class="article_foot clearfix">
                <div class="tablist">
                    <i class="icon-tags"></i>
                    <a>PHP</a>
                    <a>新版本</a>
                </div>
            </div>
        </div>

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
        <div class="widget">
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
        </div>
    </div>
</div>
</div>


<a href="#" onclick="gotoTop(0.05, 10);return false;" class="totop"></a>
</body>
</html>