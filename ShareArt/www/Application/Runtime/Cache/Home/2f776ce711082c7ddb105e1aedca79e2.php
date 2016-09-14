<?php if (!defined('THINK_PATH')) exit();?><!--文件公用头部分-->
<!-- <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<html lang="en">
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<!-- <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script> -->

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<!-- <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/css/app.css" rel="stylesheet">
<script type="text/javascript" src="/Public/js/app.js" ></script>
<script type="text/javascript" src="/Public/js/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="/Public/js/bootstrap.min.js" ></script>

<head>
    <meta charset="UTF-8">
</head>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class=" nav navbar-nav ">
                        <li ><a href="<?php echo U('Index/index');?>">首页</a></li>
                        <li> <a href="<?php echo U('Student/index');?>">成员库中心</a></li>
                        <li><a href="<?php echo U('Teacher/index');?>">教员库中心</a></li>
                        <li><a href="<?php echo U('About/index');?>">关于我们</a></li>
                        <li><a href="<?php echo U('Contact/index');?>">联系我们</a></li>
                    </ul>
                    <!--<div class="nav nav-bar navbar-right">-->
                        <!--<div class="btn btn-group">-->
                            <!--<button class="btn btn-default">注册</button>-->
                            <!--<button class="btn btn-default">登陆</button>-->
                        <!--</div>-->
                    <!--</div>-->
                </div><!--/.nav-collapse -->

            </div>
        </nav>



<title>教员库中心</title>
<!--教员库中心-->
<div class="content">
    <div class="container body-set">
        <div class="row">
            <div class="col-xs-12">
                <div class="header">
                    <div class="site-name"><h1 class="modal-title text-center"></h1></div>
                    <div class="logoimg text-center"><img width="78px;" src="/Public/images/teacher/teacher-icon.png"/></div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 100px;padding-bottom: 50px;">
          
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$teacher): $mod = ($i % 2 );++$i;?><div class="col-md-4">
                <div class="teacher-content" >
                    <a href="<?php echo U('Teacher/info',array('id'=>$teacher['id']));?>" >
                    <div class="img-thumbnail">
                        <img   src="/Public/images/teacher/<?php echo ($teacher["img_url"]); ?>"/>
                    </div>
                    <div class="teacher-nickname"><p>教员：<?php echo ($teacher["nickname"]); ?></p></div>
                    <div class="teacher-class-num">教员等级：
                    <?php $__FOR_START_23282__=0;$__FOR_END_23282__=$teacher["star"];for($i=$__FOR_START_23282__;$i < $__FOR_END_23282__;$i+=1){ ?><span class="glyphicon glyphicon glyphicon-star"></span><?php } ?></p></div>
                    </a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            
        </div>
    </div>
</div>

</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-12 footer-title">应用下载</div>
                <div class="col-md-12 footer-set">Android下载</div>
                <div class="col-md-12 footer-set">IOS下载</div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12 footer-title">平台建设</div>
                <div class="col-md-12 footer-set">学员中心</div>
                <div class="col-md-12 footer-set">教员中心</div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12 footer-title">关于我们</div>
                <div class="col-md-12 footer-set">公司介绍</div>
                <div class="col-md-12 footer-set">联系我们</div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12 footer-title">官方微信</div>
                <div class="col-md-12 footer-title">
                    <img src="/Public/images/index/art-code.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 footer-right">
                <p>Copyright © ****有限公司版权所有 备案许可证： 沪ICP备*****号</p>
            </div>
        </div>
    </div>
</footer>
</html>