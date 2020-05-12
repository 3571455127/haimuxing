<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>"/>
    <meta name="description" content="<?php echo ($seo_description); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <script src="__PUBLIC__/www/js/circleChart.min.js"></script>
    <script src="__PUBLIC__/www/js/jquery.lazyload.min.js"></script>
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <header>
        <div class="top-bar clearfix">
            <div class="container">
                <div class="row">
                    <div class="left col-lg-7 col-md-6">HYMSON---The provider of laser & automatic integrated solution</div>
                    <div class="right col-lg-5 col-md-6">
                        <div class="eamil col-lg-6 col-md-6 col-sm-6">
                            <a href="mailto:<?php echo ($site_email); ?>" target="_blank" class="emails">
                                <span><?php echo ($site_email); ?></span></a>
                        </div>
                        <div class="share col-lg-6 col-md-6 col-sm-6">
                            <ul class="clearfix">
                                <li class="youtube"><a href="<?php echo ($youtube); ?>" title="youtube"
                                        target="_blank" rel="nofollow"><img src="__PUBLIC__/www/images/top-youtube.png" alt=""></a>
                                </li>
                                <li class="twitter"><a href="<?php echo ($twitter); ?>" title="twitter" target="_blank"
                                        rel="nofollow"><img src="__PUBLIC__/www/images/top-twitter.png" alt=""></a></li>
                                <li class="facebook"><a href="<?php echo ($facebook); ?>" title="facebook"
                                        target="_blank" rel="nofollow"><img src="__PUBLIC__/www/images/top-facebook.png" alt=""></a>
                                </li>
                                <li class="linkedin"><a href="<?php echo ($ins); ?>" title="linkedin"
                                        target="_blank" rel="nofollow"><img src="__PUBLIC__/www/images/top-linkedin.png" alt=""></a>
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>

                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#product">Product</a></li>
                            <li><a href="#solution">Solution</a></li>
                            <li><a href="#about">about Us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>
<div class="index">

    <!-- banner  -->
    <div id="home" class="banner">
        <!-- pc -->
        <div class="pc-banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><!-- start -->
                        <div class="swiper-slide">
                            <a href="#contant">
                                <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                            </a>
                        </div>
                        <!-- end --><?php endforeach; endif;?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-btn">
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>

            </div>
        </div>
        <!-- wap -->
        <div class="wap-banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><!-- start -->
                        <div class="swiper-slide">
                            <a href="#contant">
                                <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                            </a>
                        </div>
                        <!-- end --><?php endforeach; endif;?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- product -->
    <div>
        <a id="product"></a>
        <div class="product">
            <h3>Pr<span>o</span>duct</h3>
            <div class="list">
                <!-- 左图右文 -->
                <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=94")->order("listorder desc")->limit("4")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                    <div class="box clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="img col-lg-6 col-md-6 col-sm-6">
                                    <div class="box-img"> <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                </div>
                                <div class="txt col-lg-6 col-md-6 col-sm-6">
                                    <?php echo ($r["cont"]); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end --><?php endforeach; endif;?>
                <!-- 左文右图 -->
                <!-- start -->
                <div class="product-bg clearfix">
                    <div class="container">
                        <div class="row">
                            <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=95")->order("listorder desc")->limit("4")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="box">
                                    <div class="txt col-lg-6 col-md-6 col-sm-6">
                                        <?php echo ($r["cont"]); ?>
                                    </div>
                                    <div class="img col-lg-6 col-md-6 col-sm-6">
                                        <div class="box-img"> <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                    </div>
                                </div><?php endforeach; endif;?>
                        </div>
                    </div>

                </div>
                <!-- end -->
                <a href="#contact" class="pro-contact">Contact Us</a>
                <?php  $_result=M("Product")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=110")->order("listorder desc")->limit("4")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="box clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="img col-lg-6 col-md-6 col-sm-6">
                                    <div class="box-img"> <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                </div>
                                <div class="txt col-lg-6 col-md-6 col-sm-6">
                                    <?php echo ($r["cont"]); ?>
                                </div>
                            </div>
                        </div>

                    </div><?php endforeach; endif;?>
            </div>

        </div>
    </div>

    <!-- Cutting Ability -->
    <div class="ability">
        <div class="container">
            <div class="row">
                <?php getcatvar('page','id = 111','cont');?>
            </div>
        </div>
    </div>

    <!-- Solution -->
    <div>
        <a id="solution"></a>
        <div class="solution">
            <div class="container">
                <div class="row">
                    <?php getcatvar('page','id = 77','cont');?>
                </div>
            </div>
        </div>

    </div>

    <!-- about -->
    <div>
        <a id="about"></a>
        <div class="about">
            <div class="container">
                <div class="row">
                    <?php getcatvar('page','id = 74','cont');?>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Hymson -->
    <div class="choose">
        <div class="container">
            <div class="row">
                <?php getcatvar('page','id = 112','cont');?>
            </div>
        </div>
    </div>

    <!-- Partners -->
    <div class="partner">
        <div class="container">
            <div class="row">
                <h3>Partners</h3>

                <!-- pc  -->
                <div class="pc-partner" style="position: relative; padding:50px 0 30px 0;">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php  $_result=M("Partners")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=113")->order("listorder desc")->limit("30")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                                <div class="swiper-slide"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                <!-- end --><?php endforeach; endif;?>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <!-- wap -->
                <div class="wap-partner">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php  $_result=M("Partners")->field("thumb,title,listorder,id")->where(" 1  AND status=1  AND catid=113")->order("listorder desc")->limit("30")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                                <div class="swiper-slide"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></div>
                                <!-- end --><?php endforeach; endif;?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- contact -->
    <div>
        <a id="contact"></a>
        <div class="contact">
            <div class="container">
                <div class="row">
                    <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit2(this);"
                        action="index.php?g=Home&a=message">
                        <div class="left col-lg-6 col-md-6 col-sm-6">
                            <input type="text" placeholder="* Name" name="name">
                            <input type="text" placeholder="* Emai" name="email">
                            <textarea placeholder="* Message" name="message"></textarea>
                            <input type="submit" value="Send Message" class="submit-btn">
                        </div>
                        <div class="right col-lg-6 col-md-6 col-sm-6">
                            <input type="text" placeholder="Company Name" name="com">
                            <input type="text" placeholder="Phone Number" name="phone">
                            <input type="submit" value="Send Message" class="wap-submit-btn">
                            <div class="footer-logo"><a href=""><img src="/Public/www/images//bootom-logo.png"
                                        alt=""></a></div>
                            <h5><?php echo ($name); ?></h5>
                            <a class="website" href="<?php echo ($wwwurl); ?>" target="_blank"><?php echo ($wwwurl); ?></a>
                            <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                                <span><?php echo ($email); ?></span></a>
                            <ul class="clearfix">
                                <li class="youtube"><a href="<?php echo ($youtube); ?>" title="" target="_blank" rel="nofollow"><img
                                            src="/Public/www/images//bottom-youtube.png" alt=""></a>
                                </li>
                                <li class="twitter"><a href="<?php echo ($twitter); ?>" title="" target="_blank" rel="nofollow"><img
                                            src="/Public/www/images//bottom-twitter.png" alt=""></a>
                                </li>
                                <li class="facebook"><a href="<?php echo ($facebook); ?>" title="" target="_blank" rel="nofollow"><img
                                            src="/Public/www/images//bottom-facebook.png" alt=""></a>
                                </li>
                                <li class="linkedin"><a href="<?php echo ($ins); ?>" title="" target="_blank" rel="nofollow"><img
                                            src="/Public/www/images//bottom-linkedin.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

    <!-- footer -->
    <footer>
        <div class="goTop">
            <i class="topIcon"></i>
            <p>TOP</p>
        </div>
    </footer>
</body>

</html>