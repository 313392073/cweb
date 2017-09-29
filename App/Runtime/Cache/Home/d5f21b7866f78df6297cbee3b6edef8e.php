<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>百亿云 定制开发数据分析系统</title>
    <meta name="keywords" content="大数据，数据挖掘，定制开发，网站设计">
    <meta name="description" content="定制开发数据分析系统，专业大数据分析服务，网络定制设计与运营分析，用数据创造百亿价值">
    <meta name="author" content="百亿云">
    <link rel="shortcut icon" href="/oweb/Public/image/byy.png">
    <!-- Bootstrap -->
    <link href="/oweb/Public/source/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/oweb/Public/source/jquery/dist/jquery.min.js"></script>
    <script src="/oweb/Public/source/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/oweb/Public/css/cooperation.css">
    <link rel="stylesheet" href="/oweb/Public/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="/oweb/Public/source/animate/animate.min.css">
    <script src="/oweb/Public/js/common.js"></script>
</head>
<body>
<div class="contain">
    <!--头部-->
    <div class="header">
        <div class="banner">
            <div id="lunbo" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators hidden-xs">
                    <li data-target="#lunbo" data-slide-to="0" class="active"></li>
                    <li data-target="#lunbo" data-slide-to="1"></li>
                    <li data-target="#lunbo" data-slide-to="2"></li>
                    <li data-target="#lunbo" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/oweb/Public/image/common/banner_04.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/oweb/Public/image/common/banner_03.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/oweb/Public/image/common/banner_02.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/oweb/Public/image/common/banner_01.jpg" alt="...">
                    </div>
                </div>

                <a class="left carousel-control" href="#lunbo" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">上一张</span>
                </a>
                <a class="right carousel-control" href="#lunbo" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">下一张</span>
                </a>
            </div>
        </div>
    </div>
    <!--导航-->
    <div class="topbar">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navList" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo U('Home/Index/games');?>" class="visible-xs-inline" id="navLeft"><span>点击进入</span><span>游戏云集</span></a>
                </div>
                <div class="collapse navbar-collapse animated bounceIn" id="navList">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo U('Home/Index/main');?>"><span>首页</span><span class="desc">Home page</span></a></li>
                        <li><a href="<?php echo U('Home/Index/dataServe');?>"><span>云定制</span><span class="desc">cloud customization</span></a></li>
                        <li class="act"><a href="<?php echo U('Home/Index/cooperation');?>"><span>云合作</span><span class="desc">cloud cooperation</span></a></li>
                        <li><a href="<?php echo U('Home/Index/team');?>"><span>云团队</span><span class="desc">cloud team</span></a></li>
                        <li class="hidden-xs ltext"><a href="<?php echo U('Home/Index/games');?>"><span>点击进入</span><span>游戏云集</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--内容-->
    <div class="main  animated zoomIn">
        <div class="cop_top">
            <div class="cop_map"></div>
            <div class="cop_ypic">百亿云-Use my mind by hundred,<br>Design your game for billion! <br>百亿云成立1年多以来已经为N个公司开发了各种棋牌项目，其中包括斗地主、斗牛、干瞪眼、麻将、牌九、水果机等游戏。并且每个游戏都集成了高质量的游戏表现和别具匠心的UI设计，从而为合作公司带来了数以万计的玩家和丰厚的收益! 百亿云秉承“精诚所至，金石为开，品质至尊，德行天下”的服务理念，不断开拓创新，攻克难关。并发展成西部地区最具竞争力的棋牌开发公司之一.</div>
        </div>
        <div class="cop_main">
            <p class="cop_title">合作企业</p>
            <p>排名秩序不分先后</p>
        </div>
        <div class="cop_pro">
            <div class="pro_box">
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_12.png" title="来闽福建麻将" alt="图片加载中。。。" >
                    <p>来闽福建麻将</p>
                </div>
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_04.png" title="酒城风云棋牌" alt="图片加载中。。。">
                    <p>酒城风云棋牌</p>
                </div>
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_05.png" title="四季棋牌" alt="图片加载中。。。">
                    <p>四季棋牌</p>
                </div>
            </div>
            <div class="pro_box">
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_06.png" title="老西儿棋牌" alt="图片加载中。。。" >
                    <p>老西儿棋牌</p>
                </div>
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_13.png" title="乐淘干瞪眼" alt="图片加载中。。。">
                    <p>乐淘干瞪眼</p>
                </div>
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_08.png" title="黄石棋牌" alt="图片加载中。。。">
                    <p>黄石棋牌</p>
                </div>
            </div>
            <div class="pro_box">
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_09.png" title="天天摸棋牌" alt="图片加载中。。。" >
                    <p>天天摸棋牌</p>
                </div>
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_11.png" title="豪发麻将" alt="图片加载中。。。">
                    <p>豪发麻将</p>
                </div>
                <div class="pro_l">
                    <img src="/oweb/Public/image/cop/cop_10.png" title="乐淘贵溪东带庄" alt="图片加载中。。。">
                    <p>乐淘贵溪东带庄</p>
                </div>
            </div>
        </div>
    </div>
    <!--页脚-->
    <div class="footer">
        <div class="fmain">
            <div class="xfooter">
                <p class="ftitle">联系我们</p>
                <p class="bgpic"></p>
                <p>Address And Contact  </p>
                <ul class="ftext">
                    <li>
                        <a href="javascript:void(0)" class="fftext" title="中国, 四川省成都市 高新区天府软件园G区8栋">
                            <span class="icon-img"><i class="icon-map-marker"></i></span>
                            <span>中国, 四川省成都市 高新区天府软件园G区8栋</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" title="s@baiyy.com">
                            <span class="icon-img"><i class="icon-envelope-alt"></i></span>
                            <span>s@baiyy.com</span>
                        </a>
                    </li>
                    <li class="qrcode">
                        <a href="javascript:void(0)">
                            <img src="/oweb/Public/image/common/icon_er.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="fftel" title="028-67875646">
                            <span class="icon-img"><i class="icon-phone"></i></span>
                            <span>028-67875646</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" title="231 897 1816">
                            <span class="icon-img"><i class="icon-user"></i></span>
                            <span>231 897 1816</span>
                        </a>
                    </li>
                </ul>
                <p class="copyright">Copyright © 2016 百亿云 蜀ICP备16007776号</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>