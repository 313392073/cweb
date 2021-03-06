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
    <link rel="stylesheet" href="/oweb/Public/css/apply.css">
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
                        <img src="/oweb/Public/image/common/banner_02.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/oweb/Public/image/common/banner_03.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/oweb/Public/image/common/banner_01.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="/oweb/Public/image/common/banner_04.jpg" alt="...">
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
                <div class="collapse navbar-collapse" id="navList">
                    <ul class="nav navbar-nav">
                        <li class="act"><a href="<?php echo U('Home/Index/main');?>"><span>首页</span><span class="desc">Home page</span></a></li>
                        <li><a href="<?php echo U('Home/Index/dataServe');?>"><span>云定制</span><span class="desc">cloud customization</span></a></li>
                        <li><a href="<?php echo U('Home/Index/cooperation');?>"><span>云合作</span><span class="desc">cloud cooperation</span></a></li>
                        <li><a href="<?php echo U('Home/Index/team');?>"><span>云团队</span><span class="desc">cloud team</span></a></li>
                        <li class="hidden-xs ltext"><a href="<?php echo U('Home/Index/games');?>"><span>点击进入</span><span>游戏云集</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--内容-->
    <div class="main">
        <div class="tipbtn">
            <ul>
                <li>
                    <a href="<?php echo U('Home/Index/main');?>">棋牌定制</a>
                </li>
                <li>
                    <a href="<?php echo U('Home/Index/apply');?>">应用开发</a>
                </li>
                <li>
                    <a href="<?php echo U('Home/Index/dataServe');?>">数据服务</a>
                </li>
                <li class="tiplast">
                    <a href="<?php echo U('Home/Index/mobGame');?>">手游定制</a>
                </li>
            </ul>
        </div>
        <div class="apply animated fadeInDown">
            <div class="apply_box">
                <div class="licon">
                    <img src="/oweb/Public/image/apply/apply_01.png" alt="地方棋牌定制">
                    <div>
                        <p class="atitle">地方棋牌定制</p>
                        <p>Local board  customization</p>
                    </div>
                </div>
                <div class="rtext"><p>国内专业的棋牌游戏开发团队，采用C++与Cocos2d-X游戏引擎开发的平台，稳定可靠。数据多重加密，防止各种暴力破解。全面支持Android、IOS、Windows phone等系统。根据客户需求，定制专属地方特色棋牌，迎合地方玩家习惯，融入地方特色，提升玩家亲和度，提高用户留存，竞争小，更易运营。目前已开发出各地麻将、十三水、牛牛、斗地主、炸金花、牌九等20多种玩法的棋牌游戏</p></div>
            </div>
            <div class="apply_box">
                <div class="licon">
                    <img src="/oweb/Public/image/apply/apply_02.png" alt="地方棋牌定制">
                    <div>
                        <p class="atitle">APP定制</p>
                        <p>Custom APP</p>
                    </div>
                </div>
                <div class="rtext"><p>成都【百亿云科技】专注于精品APP应用软件定制与研发。拥有一直热情专业的手机应用软件APP开发团队，致力与IOS、Android、小程序应用软件的开发设计定制。倾听客户需求，了解用户使用环境和操作流程；严谨的项目管控流程，深入考虑平台的延展性和包容性，多年开发行业的技术积累，让您的构想成为财富。我们秉承不断的创新、独特的创意、专业的技术，专注用心的服务打造适合您的定制。</p></div>
            </div>
            <div class="apply_box">
                <div class="licon">
                    <img src="/oweb/Public/image/apply/apply_03.png" alt="地方棋牌定制">
                    <div>
                        <p class="atitle">虚拟VR/360全景图</p>
                        <p>Virtual VR/ 360 panorama</p>
                    </div>
                </div>
                <div class="rtext"><p>独有的webGL的全景视觉渲染引擎技术，输出最具广泛兼容性的HTML5全景视觉播放器，专业的团队为企业客户提供一流的AR/VR 技术服务，定制化AR/VR整体解决方案，个性定制，更低成本，满足各类展示需求。</p></div>
            </div>
            <div class="apply_box">
                <div class="licon">
                    <img src="/oweb/Public/image/apply/apply_04.png" alt="地方棋牌定制">
                    <div>
                        <p class="atitle">网站定制开发</p>
                        <p>Website customized  development</p>
                    </div>
                </div>
                <div class="rtext"><p>一站式网站服务平台，为企业提供专业的企业展示型、B2C电商型、视频类网站定制开发服务。成熟独到的网站策划，随需而变，量身定制。以创新、专业、执着的服务理念为客户提供专业的网站建设服务。网站着重展示企业文化和品牌特色，利用多体交互技术、动态网页技术、配合广告设计将客户品牌形象在互联网上多纬度，全方位、立体式的表现出来。专业设计团队制作，服务满意为止！</p></div>
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