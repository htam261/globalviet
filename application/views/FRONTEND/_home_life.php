<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= STATIC_PATH_URL ?>css/Jssor.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/carousel.css">
    <script src="<?= STATIC_PATH_URL ?>js/jquery-latest.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/style.css">
</head>
<body>
<div class="col-md-12 padding-top-bottom-10">
    <div class="container min-height590  boder-radius-10 padding-left-right-0 bacground-ebebeb">
        <!--header-->
        <div class="col-md-12 padding-left-right-0 pading-magin-not bacground-while">
            <div class="col-md-2 text-center">
                <img src="<?= STATIC_PATH_URL ?>images/logo.jpg">
            </div>
            <div class="col-md-7">
                <div class="text-center990">
                    <h1 style="margin-top: 9%"><b>Viện nghiên cứu cao su việt nam</b></h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="margin-top-35-35 mediamagin-top-15">
                    <!--start slider-->

                    <script src="<?= STATIC_PATH_URL ?>js/Jssor.js"></script>
                    <style type="text/css">#slider1_container .slides img{ width: 30px; height: 30px;}
                        #slider1_container .jssora03l{ width: 32px; height: 32px;}
                    </style>
                    <div id="slider1_container" class="slider1_container" style="position:relative;margin:0 auto;width:250px;height:30px;overflow:hidden;">
                        <div u="loading" style="position:absolute;top:0px;left:0px;">
                            <div style="filter:alpha(opacity=70);opacity:0.7;position:absolute;display:block;background-color:#000;top:0px;left:0px;width:100%;height:100%;">
                            </div>
                            <div style="position:absolute;display:block;background:url(<?= STATIC_PATH_URL ?>img/loading.gif) no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
                            </div>
                        </div>
                        <div u="slides" style="margin-left: 43px ;cursor:move;position:absolute;left:0px;top:0px;width:263px;height:30px;overflow:hidden;">
                            <div><img u="image" src="<?= STATIC_PATH_URL ?>images/Layer-21-copy-3_01.jpg"></div>
                            <div><img u="image" src="<?= STATIC_PATH_URL ?>images/Layer-21-copy-3_07.jpg"></div>
                            <div><img u="image" src="<?= STATIC_PATH_URL ?>images/Layer-21-copy-3_09.jpg"></div>
                            <div><img u="image" src="<?= STATIC_PATH_URL ?>images/Layer-21-copy-3_01.jpg"></div>
                            <div><img u="image" src="<?= STATIC_PATH_URL ?>images/Layer-21-copy-3_03.jpg"></div>
                            <!--<div><img u="image" src="img/ancient-lady/011.jpg"></div>
                            <div><img u="image" src="img/ancient-lady/013.jpg"></div>
                            <div><img u="image" src="img/ancient-lady/006.jpg"></div>
                            <div><img u="image" src="img/ancient-lady/011.jpg"></div>
                            <div><img u="image" src="img/ancient-lady/013.jpg"></div>
                            <div><img u="image" src="img/ancient-lady/006.jpg"></div>
                            <div><img u="image" src="img/ancient-lady/011.jpg"></div>
                            <div><img u="image" src="img/ancient-lady/013.jpg"></div>-->
                        </div>
                        <div u="navigator" class="jssorb03" style="bottom:4px;right:6px;">
                            <div u="prototype"><div u="numbertemplate"></div></div>
                        </div>
                        <span u="arrowleft" class="jssora03l" style="top:23px;left:0px;">
                        </span>
                        <span u="arrowright" class="jssora03r" style="top:23px;right:0px;">
                        </span>
                        <a style="display:none" href="#">jQuery Slider</a>
                        <script>
                            jssor_slider1_starter('slider1_container');
                        </script>
                    </div>

                    <!--end start slider-->
                </div>
            </div>
        </div>
        <!--end header-->
        <!--menu-->
        <div class="col-md-12 padding-left-right-0" style="min-height: 58px;">
            <!--<img src="images/menu-001.jpg" class="img-responsive">-->
            <div class="menu">
                <nav class="navbar navbar-default magin-bottom-0" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="#">Menu</a>-->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li><a href="<?php base_url() ?>/tintucsukien.html">Tin tức sự kiện</a></li>
                            <li><a href="/hoatdongdetaill.html">Hoạt động R-D</a></li>
                            <li><a href="/sanphamdichvu.html">Sản phẩm dịch vụ</a></li>
                            <li><a href="<?= base_url('gioi-thieu/ve-chung-toi.html') ?>">Giới thiệu RRIV</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Nội bộ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">VI <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VI</a></li>
                                    <li><a href="#">EN</a></li>

                                </ul>
                            </li>
                        </ul>

                        <div class="col-sm-3 col-md-3 navbar-right">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-green" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
        <!--end menu-->
        <!--slider-->
        <div class="col-md-12 padding-left-right-0 magin-bottom-10">
            <div data-ride="carousel" class="carousel slide heigh_slider380" id="myCarousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                    <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                    <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                </ol>
                <div role="listbox" class="carousel-inner">
                    <div class="item active">
                        <img alt="First slide" src="<?= STATIC_PATH_URL ?>images/web-RRIV-finall1_34.jpg" class="first-slide">
                        <!--<div class="container">
                            <div class="carousel-caption">
                                <h1>Example headline.</h1>
                                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                <p><a role="button" href="#" class="btn btn-lg btn-primary">Sign up today</a></p>
                            </div>
                        </div>-->
                    </div>
                    <div class="item">
                        <img alt="Third slide" src="<?= STATIC_PATH_URL ?>images/web-RRIV-finall1_34.jpg" class="third-slide">
                        <!-- <div class="container">
                             <div class="carousel-caption">
                                 <h1>Another example headline.</h1>
                                 <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                 <p><a role="button" href="#" class="btn btn-lg btn-primary">Learn more</a></p>
                             </div>
                         </div>-->
                    </div>
                    <div class="item">
                        <img alt="Third slide" src="<?= STATIC_PATH_URL ?>images/web-RRIV-finall1_34.jpg" class="third-slide">
                        <!-- <div class="container">
                             <div class="carousel-caption">
                                 <h1>One more for good measure.</h1>
                                 <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                 <p><a role="button" href="#" class="btn btn-lg btn-primary">Browse gallery</a></p>
                             </div>
                         </div>-->
                    </div>
                </div>
                <a data-slide="prev" role="button" href="#myCarousel" class="left carousel-control">
                    <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-slide="next" role="button" href="#myCarousel" class="right carousel-control">
                    <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--end slider-->
        <div class="col-md-12 divcontain bacground-while padding-left-right-0">
            <div class="col-md-12 padding-left-right-0">
                <img src="<?= STATIC_PATH_URL ?>images/web-RRIV-finall1_03.jpg" class="img-46" height="46"/>
            </div>
            <!--gioi thiêu-->
            <div class="col-md-12 padding-left-right-0 boder-bottom-1">
                <div class="jumbotron magin-bottom-0 bacground-while">
                    <h1 class="text-center"><span class="border-bottom-2">Giới thiệu</span></h1>
                    <div class="row ">
                        <div class="col-md-4">
                            <h2>Về chúng tôi</h2>
                            <p class="text-justify">
                                <font>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...
                                </font>
                            </p>
                            <p><a role="button" href="#" class="btn btn-green">» Đọc tiếp..</a></p>
                        </div>
                        <div class="col-md-4">
                            <h2>Nghiêng cứu và phát triển</h2>
                            <p class="text-justify">
                                <font>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...
                                </font>
                            </p>
                            <p><a role="button" href="#" class="btn btn-green">» Đọc tiếp..</a></p>
                        </div>
                        <div class="col-md-4">
                            <h2>Các sản phẩm phục vụ sản xuất</h2>
                            <p class="text-justify">
                                <font>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...
                                </font>
                            </p>
                            <p><a role="button" href="#" class="btn btn-green">» Đọc tiếp..</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end gioi thieu-->

            <!--tin tuc-->
            <div class="col-md-12 padding-left-right-0 boder-bottom-1">
                <div class="jumbotron magin-bottom-0 bacground-while">
                    <h1 class="text-center"><span class="border-bottom-2">Tin tức</span></h1>
                    <div class="row">
                        <div class="col-md-4">
                            <img style="float:left" src="<?= STATIC_PATH_URL ?>images/Layer-16.jpg" width="90" height="90" class="img-circle" alt="" title="">
                            <div class="">
                                <h2 class="content-heading onerows padding-left-10">Hoạt động kỷ niệm 84 năm</h2>
                                <p class="text-justify min-height200">
                                    <font class="padding-left-10">
                                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                    </font>
                                </p>
                            </div>
                            <p><a role="button" href="#" class="btn btn-green">View details »</a></p>
                        </div>
                        <div class="col-md-4">
                            <img style="float:left" src="<?= STATIC_PATH_URL ?>images/Layer-18.jpg" width="90" height="90" class="img-circle" alt="" title="">
                            <div>
                                <h2 class="content-heading onerows padding-left-10">Hội khỏe truyền thống CN_VL LĐ</h2>
                                <p class="text-justify min-height200">
                                    <font class="padding-left-10">
                                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                    </font>
                                </p>
                            </div>
                            <p><a role="button" href="#" class="btn btn-green">View details »</a></p>
                        </div>
                        <div class="col-md-4">
                            <img style="float:left" src="<?= STATIC_PATH_URL ?>images/Layer-19.jpg" width="90" height="90" class="img-circle" alt="" title="">
                            <div>
                                <h2 class="content-heading onerows padding-left-10">Buổi tham quan thực tế tại Viện</h2>
                                <p class="text-justify min-height200">
                                    <font class="padding-left-10">
                                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                    </font>
                                </p>
                            </div>
                            <p><a role="button" href="#" class="btn btn-green">View details »</a></p>
                        </div>
                    </div>
                    <div class="phantrang">
                        <nav class="text-center">
                            <ul class="pagination">
                                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
                                <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end tin tuc-->
            <!--san pham-->
            <div class="col-md-12 padding-left-right-0 boder-bottom-1 ">
                <div class="jumbotron magin-bottom-0 bacground-while">
                    <h1 class="text-center"><span class="border-bottom-2">Sản phẩm</span></h1>
                    <div class="row containersanpham">
                        <div class="col-sm-6 col-md-3">
                            <div class="">
                                <img class="img-circle" src="<?= STATIC_PATH_URL ?>images/Layer-6.jpg" width="150" height="150" alt="...">
                                <div class="caption">
                                    <h3>Các tiến bộ kỹ thuật</h3>
                                    <p>Lorem ipsum dolor sit amet elit consectetur adipisicing elit</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="">
                                <img class="img-circle" src="<?= STATIC_PATH_URL ?>images/Layer-7.jpg" width="150" height="150" alt="...">
                                <div class="caption">
                                    <h3>Các tiêu chuẩn - quy chuẩn</h3>
                                    <p>Lorem ipsum dolor sit amet elit consectetur adipisicing elit</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="">
                                <img class="img-circle" src="<?= STATIC_PATH_URL ?>images/Layer-8.jpg" width="150" height="150" alt="...">
                                <div class="caption">
                                    <h3>Giống cao su tiến bộ</h3>
                                    <p>Lorem ipsum dolor sit amet elit consectetur adipisicing elit</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="">
                                <img class="img-circle" src="<?= STATIC_PATH_URL ?>images/Layer-9.jpg" width="150" height="150"  alt="...">
                                <div class="caption">
                                    <h3>Dụng cụ thiết kế miệng cạo</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit consectetur adipisicing elit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="phantrang">
                        <nav class="text-center">
                            <ul class="pagination">
                                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
                                <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end san pham-->
        </div>

        <!-- footer-->
        <div class="col-md-12 padding-left-right-0 boder-bottom-1 margin-top-10 bacground-green">

            <div class="row magin-left-right-0">
                <div class="col-sm-6 col-md-3">
                    <h3><font size="3"> Hoạt động R-D</font></h3>
                    <div class="col-lg-12 boder-top-2 divfooter padding-top-bottom-10">
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Đề tài nghiêng cứu</a></p>
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Báo cáo khoa học</a> </p>
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Sở hữu trí tuệ</a></p>
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Ấn phẩm</a> </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h3>Sản phẩm</h3>
                    <div class="col-lg-12 boder-top-2 divfooter padding-top-bottom-10">
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Sản phẩm thương mại</a></p>
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Dịch vụ kỹ thuật</a> </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h3>Giới thiệu</h3>
                    <div class="col-lg-12 boder-top-2 divfooter padding-top-bottom-10">
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Về chúng tôi</a></p>
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Nghiêng cứu và phát triển</a> </p>
                        <p><i class="glyphicon-ico-while"></i> <a href="#">Sản xuất kinh doanh</a></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h3>Tổng lượt truy cập</h3>
                    <div class="col-lg-12 boder-top-2 divfooter padding-top-bottom-10">
                        <p><i class="glyphicon-ico-while"></i> online<span class="floatright">9</span></p>
                        <p><i class="glyphicon-ico-while"></i> Hôm nay <span class="floatright">159</span></p>
                        <p><i class="glyphicon-ico-while"></i> Tổng lượt truy cập <span class="floatright">3567</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!--end footer-->
        <!--info footer-->
        <div class="col-md-12 padding-left-right-0 text-center bacground-footer" style="border-top: 10px solid;">
            <p style="line-height: 35px;">
                <span>Copyright © 2015 - RRIV - All Right Reserved | Designed by <a href="vnetwork.vn"><b>VNETWORK</b></a> </span>
            </p>
        </div>
        <!--end info footer-->

    </div>
</div>

<script src="<?= STATIC_PATH_URL ?>js/jquery.min.js"></script>
<script src="<?= STATIC_PATH_URL ?>js/bootstrap.min.js"></script>


<script src="<?= STATIC_PATH_URL ?>js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>