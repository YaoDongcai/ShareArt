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
            <div class="col-md-offset-4 clo-md-4">
                <div class="img-thumbnail">
                    <img   src="/Public/images/teacher/<?php echo ($teacher["img_url"]); ?>"/>
                </div>
                <p class="teacher teacher-name">
                    <span class="teacher-icon glyphicon glyphicon-user" aria-hidden="true"></span>
                    姓：<?php echo ($teacher["nickname"]); ?></p>

                <p class="teacher">  <span class="teacher-icon glyphicon glyphicon-tasks" aria-hidden="true"></span> 才艺：<?php echo ($teacher["music_instruments"]); ?></p>
                <p class="teacher">  <span class="teacher-icon glyphicon glyphicon-text-background" aria-hidden="true"></span> 教龄：<?php echo ($teacher["teacher_age"]); ?></p>
                <p class="teacher">  <span class="teacher-icon glyphicon glyphicon-education" aria-hidden="true"></span>学位：<?php echo ($teacher["dipnoma"]); ?></p>
                <p class="teacher">  <span class="teacher-icon glyphicon glyphicon-th" aria-hidden="true"></span>授课区域：<?php echo ($teacher["teacher_area"]); ?></p>
                <p class="teacher"> <span class="teacher-icon glyphicon glyphicon-book" aria-hidden="true"></span>所获证书：暂时没有</p>
                <p class="teacher"> <span class="teacher-icon glyphicon glyphicon-bookmark" aria-hidden="true"></span>教学理念：<?php echo ($teacher["teacher_ideas"]); ?></p>

                <p class="teacher"><span class="teacher-icon glyphicon glyphicon-qrcode"></span>分享
                <div class="img-thumbnail text-center">
                    <img  src="<?php echo ($teacher["img_data"]); ?>"/>
                </div>
                </p>
                <p class="teacher ">
                  <span class="teacher-icon glyphicon glyphicon-eye-open">此页浏览量：<span style="font-size:23px;"><?php echo ($teacher["page_count"]); ?></span></span>
                    <button class="btn-success has-success" data-toggle="modal" data-target="#teacherModal">报名</button>
                    <div class="modal fade" id="teacherModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">报课提交申请表</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="panel panel-info">
                                        <!--<div class="panel-heading">-->
                                            <!--详情提交-->
                                        <!--</div>-->
                                        <div class="panel-body">
                                            <form class="demands" action="<?php echo U('upload');?>" method="POST" role="form" enctype="multipart/form-data" onsubmit="return check(this)">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group ">
                                                            <label class="control-label">手机号码</label>
                                                            <input onblur="userphone_detect(this)"
                                                                   name="phone" id="user_phone" type="tel" class="form-control input-lg" <?php echo ($data["read"]); ?> value="<?php echo ($data["phone"]); ?>" aria-describedby="sizing-addon1" aria-describedby="inputError2Status">
                                                            </input>
                                                            <span class="" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                        </div>
                                                        <div class="form-group" style="display: none">
                                                            <label class="control-label">姓名</label>
                                                            <input name="name" type="text" class="form-control input-lg" <?php echo ($data["read"]); ?> value="<?php echo ($data["user_id"]); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label class="control-label">电子邮箱</label>
                                                            <input onblur="useremail_detect(this)"
                                                                   name="email" id="user_email" type="email" class="form-control input-lg" <?php echo ($data["read"]); ?> value="<?php echo ($data["email"]); ?>" aria-describedby="sizing-addon1" aria-describedby="inputError2Status">

                                                            </input>
                                                            <span class="" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">您的称呼</label>
                                                    <p class="help-block">
                                                        我们希望可以与您沟通的时候方便称呼您 :)
                                                    </p>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio"  name="nickname" id="optionsRadios1"
                                                                   value="man" <?php echo ($data["read"]); ?> <?php echo ($data["nchecked"]); ?> checked> 先生
                                                        </label>

                                                        <label>
                                                            <input type="radio" name="nickname" id="optionsRadios1"
                                                                   value="women" <?php echo ($data["read"]); ?>  <?php echo ($data["checked"]); ?>> 女士
                                                        </label>
                                                    </div>
                                                </div >
                                                <div class="form-group">
                                                    <label class="control-label">报课名称</label>
                                                    <input name="course" type="text" class="form-control input-lg" <?php echo ($data["read"]); ?> value="<?php echo ($data["title"]); ?>">

                                                    </input>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">其他的要求描述</label>
                                                    <p class="help-block">
                                                        简单的描述一下您的要求，我们更方便的安排您的课程 :)
                                                    </p>
                                                    <textarea name="description" type="text" class="form-control" rows="12"<?php echo ($data["read"]); ?>><?php echo ($data["description"]); ?></textarea>
                                                </div >
                                                <div class="text-right">
                                                    <button type="submit" id="subs" class="btn btn-success">申请</button>
                                                 </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="modal-footer">-->
                                    <!--<button type="button" class="btn btn-default active" data-dismiss="modal">关闭</button>-->
                                    <!--<button type="button" class="btn btn-primary active">申请</button>-->
                                <!--</div>-->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </p>
            </div>
            <!--模态框-->

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