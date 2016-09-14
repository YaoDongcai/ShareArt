<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>同学艺术平台</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="/Public/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="/Public/css/animate.css" rel="stylesheet" media="screen">
    <link href="/Public/flexslider/flexslider.css" rel="stylesheet" />
    <link href="/Public/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/css/styles.css" />
    <!-- Font Awesome -->
    <link href="/Public/font/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>ToShare|<i>同学</i></b></a>
            </div>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                    <li class="active" id="firstLink"><a href="#home" class="scroll-link">同学首页</a></li>
                    <li><a href="#services" class="scroll-link">艺人推荐</a></li>
                    <li><a href="#work" class="scroll-link">同学风采</a></li>
                    <li><a href="#plans" class="scroll-link">同学课程</a></li>
                    <li><a href="#team" class="scroll-link">同学推荐</a></li>
                    <li><a href="#" class="scroll-link"></a></li>
                    <li><a href="#" class="scroll-link"></a></li>
                    <li><a href="#signin" class="scroll-link">登陆</a></li>
                    <li><a href="#login" class="scroll-link">注册</a></li>
                </ul>
            </div>

            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</header>




<!--/.header-->
<div id="#top"></div>
<section id="home">
    <div class="banner-container">
        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="/Public/images/slides/x.jpg" alt="" />
                    <div class="flex-caption container">
                        <h3>初练音乐</h3>
                        <p>ToLearn Music.</p>
                        <a href="#" class="btn btn-theme">了解更多</a>
                    </div>
                </li>
                <li>
                    <img src="/Public/images/slides/x.jpg" alt="" />
                    <div class="flex-caption container">
                        <h3>涂鸦美术</h3>
                        <p>TrueArt.</p>
                        <a href="#" class="btn btn-theme">了解更多</a>
                    </div>
                </li>
                <li>
                    <img src="/Public/images/slides/x.jpg" alt="" />
                    <div class="flex-caption container">
                        <h3>集美健身</h3>
                        <p>Gymmate Sport.</p>
                        <a href="#" class="btn btn-theme">了解更多</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end slider -->
    </div>
</section>
<section id="services" class="page-section colord">
    <div class="container">
        <div class="row">
            <div class="text" style=" text-align:center;"><font size="7" color="#000000">艺人推荐</font></div>
            <div class="text" style=" text-align:center;"><font size="3" color="#000000">我还是很喜欢你 | 像风走了八千里  | 不问归期<br><br><br></font></div>
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"> <i class="circle"><img src="/Public/images/ax.jpg" alt="" /></i>
                <h3>大臣小小</h3>
                <p>吉他方向<br>沉心静气为学</p>
            </div></div>
            <!-- end: -->
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="/Public/images/ax.jpg" alt="" /></i>
                <h3>汀兰</h3>
                <p>古筝方向<br>兴趣为先，把握细节</p>
            </div></div>
            <!-- end: -->
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="/Public/images/ax.jpg" alt="" /></i>
                <h3>朝阳里里</h3>
                <p>尤克里里方向<br>分享快乐</p>
            </div></div>
            <!-- end: -->
            <!-- item -->
            <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="/Public/images/ax.jpg" alt="" /></i>
                <h3>叶小贝</h3>
                <p>打击乐方向<br>教育的艺术在于唤醒</p>
            </div></div>
            <!-- end:-->
        </div>
    </div>
    <!--/.container-->
</section>
<!--<section id="aboutUs">先隐藏掉
  <div class="container">
    <div class="heading text-center"> -->
<!-- Heading -->
<!--<h2>关于我们</h2>
<p>同学艺术交流平台，沉静艺术中心</p>
</div>-->
<!--<div class="row feature design">
  <div class="area1 columns right">
    <h3>学艺术，就这样！</h3>
    <p>学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！</p>
    <p>学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！学艺术，就这样！</p>
  </div>
  <div class="area2 columns feature-media left"> <img src="images/feature-img-1.png" alt="" width="100%"> </div>
</div>
</div>
</section>-->
<!--
	作者：王臣
	时间：2016-09-02
	描述：客户先隐藏
<section id="clients">
  <div id="demo" class="clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="customNavigation"> <a class="prev"><i class="fa fa-chevron-circle-left"></i></a> <a class="next"><i class="fa fa-chevron-circle-right"></i></a> </div>
          <div id="owl-demo" class="owl-carousel">
            <div class="item"> <span class="helper"> <img src="images/clients/client-1.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-2.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-3.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-4.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-5.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-6.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-7.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-8.png" alt="client" /></span> </div>
            <div class="item"> <span class="helper"> <img src="images/clients/client-9.png" alt="client" /></span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<section id="work" class="page-section page">
    <div class="container text-center">
        <div class="heading">
            <h2>同学风采</h2>
            <p>我还是很喜欢你 | 像风走了八千里  | 不问归期</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="portfolio">
                    <ul class="filters list-inline" style="display:none;">
                        <li> <a class="active" data-filter="*" href="#">All</a> </li>
                        <li> <a data-filter=".photography" href="#">Design</a> </li>
                        <li> <a data-filter=".branding" href="#">Development</a> </li>
                        <li> <a data-filter=".web" href="#">Mobile</a> </li>
                    </ul>
                    <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
                        <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                        <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                        <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                        <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                        <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                        <li class="item web" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                        <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                        <li class="item web" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/00.jpg" class="fancybox"> <img src="/Public/images/work/00.jpg" alt="">
                            <div class="overlay"> <span>ToShare</span> </div>
                        </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="plans" class="page-section">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>同学课程</h2>
            <p>我还是很喜欢你 | 像风走了八千里 | 不问归期</p>
        </div>
        <div class="row flat">
            <div class="col-lg-3 col-md-3 col-xs-12">
                <ul class="plan plan1 featured">
                    <li class="plan-name">ToLearn初练</li>
                    <!--<li class="plan-price"> <strong>$29</strong> / month </li>
                    <li> <strong>5GB</strong> Storage </li>
                    <li> <strong>1GB</strong> RAM </li>
                    <li> <strong>400GB</strong> Bandwidth </li>
                    <li> <strong>10</strong> Email Address </li>
                    <li> <strong>Forum</strong> Support </li>-->
                    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">了解更多</a> </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <ul class="plan plan2 featured">
                    <li class="plan-name">TrueArt涂鸦</li>
                    <!--<li class="plan-price"> <strong>$39</strong> / month </li>
                    <li> <strong>5GB</strong> Storage </li>
                    <li> <strong>1GB</strong> RAM </li>
                    <li> <strong>400GB</strong> Bandwidth </li>
                    <li> <strong>10</strong> Email Address </li>
                    <li> <strong>Forum</strong> Support </li>-->
                    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">了解更多</a> </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <ul class="plan plan3 featured">
                    <li class="plan-name">Gymate集美</li>
                    <!--<li class="plan-price"> <strong>$199</strong> / month </li>
                    <li> <strong>50GB</strong> Storage </li>
                    <li> <strong>8GB</strong> RAM </li>
                    <li> <strong>1024GB</strong> Bandwidth </li>
                    <li> <strong>Unlimited</strong> Email Address </li>
                    <li> <strong>Forum</strong> Support </li>-->
                    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">了解更多</a> </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <ul class="plan plan4 featured">
                    <li class="plan-name">Ucourse游课</li>
                    <!--<li class="plan-price"> <strong>$999</strong> / month </li>
                    <li> <strong>50GB</strong> Storage </li>
                    <li> <strong>8GB</strong> RAM </li>
                    <li> <strong>1024GB</strong> Bandwidth </li>
                    <li> <strong>Unlimited</strong> Email Address </li>
                    <li> <strong>Forum</strong> Support </li>-->
                    <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">了解更多</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="team" class="page-section">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>同学推荐</h2>
            <p>我还是很喜欢你 | 像风走了八千里 | 不问归期</p>
        </div>
        <!-- Team Member's Details -->
        <div class="team-content">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="/Public/images/toshare_logo.jpg" alt=""> </div>
                        <!-- Member Details -->
                        <h4>大臣小小</h4>
                        <!-- Designation -->
                        <span class="pos">吉他方向</span>
                        <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="/Public/images/toshare_logo.jpg" alt=""> </div>
                        <!-- Member Details -->
                        <h4>汀兰</h4>
                        <!-- Designation -->
            <span class="pos">古筝方向
			</span>
                        <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="/Public/images/toshare_logo.jpg" alt=""> </div>
                        <!-- Member Details -->
                        <h4>叶小贝</h4>
                        <!-- Designation -->
                        <span class="pos">打击乐方向</span>
                        <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="/Public/images/toshare_logo.jpg" alt=""> </div>
                        <!-- Member Details -->
                        <h4>朝阳里里</h4>
                        <!-- Designation -->
                        <span class="pos">尤克里里方向</span>
                        <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<!--<section id="contactUs" class="contact-parlex">先隐藏掉
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center">
           Heading
          <h2>联系我们</h2>
          <p>请将您想说的话写给我们</p>
        </div>
      </div>
      <div class="row mrgn30">
        <form method="post" action="" id="contactfrm" role="form">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">尊姓大名</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="请写下您的姓名" title="Please enter your name (at least 2 characters)">
            </div>
            <div class="form-group">
              <label for="email">电子邮件</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="留个邮箱方便联系哦" title="Please enter a valid email address">
            </div>
            <div class="form-group">
              <label for="comments">意见建议</label>
              <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="仁者见仁智者见智，请您畅所欲言哦" title="Please enter your message (at least 10 characters)"></textarea>
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">提交</button>
            </div>
            <div class="result"></div>
          </div>
        </form>
      </div>
    </div>
    /.container
  </div>
</section>-->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col">
                    <h4>联系我们</h4>
                    <ul>
                        <li>地址：上海市静安区广中路788号行健楼</li>
                        <li>电话: 17302170797、18801912262</li>
                        <li>邮箱: <a href="mailto:info@example.com" title="Email Us">changingart@163.com</a></li>
                        <li>微信: <a href="skype:my.test?call" title="Skype us">沉静艺术中心</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col">
                    <h4>邮箱列表</h4>
                    <p>输入您的邮箱快速登录</p>
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your email address...">
                            <span class="input-group-btn">
                                <button class="btn" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col col-social-icons">
                    <h4>关注我们</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col">
                    <h4>最新消息</h4>
                    <p>
                        同学平台获得教育部及上海市科委好评
                        <br><br>
                        <a href="#" class="btn">了解更多</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/.page-section-->
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">Copyright &copy; 2016-2026.ChangingArt TEC. All rights reserved.</a></div>
        </div>
        <!-- / .row -->
    </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="/Public/js/modernizr-latest.js"></script>
<script src="/Public/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="/Public/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/Public/js/jquery.nav.js" type="text/javascript"></script>
<script src="/Public/js/jquery.fittext.js"></script>
<script src="/Public/js/waypoints.js"></script>
<script src="/Public/flexslider/jquery.flexslider.js"></script>
<script src="/Public/js/custom.js" type="text/javascript"></script>
<script src="/Public/js/owl-carousel/owl.carousel.js"></script>
</body>
</html>