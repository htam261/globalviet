<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/3/2015
 * Time: 2:27 PM
 */
?>
<!--silder-->
<link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-combined.min.css"/>
<link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/silder-bootstrap.css"/>
<link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/style.css">
<!--end silder-->
<div class="col-md-12 height500" style="margin-top: -35px; z-index: -1;">
    <div class="container padding-top-40 padding-left-right-0" >
        <div class="col-md-5 height455 padding-left-right-0" style="margin-left: -15px;">
            <div class="col-md-12 hoasenimg padding-left-right-0 width-reponsive-457">
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_01.png"/></span>
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_02.png" class="slivl" value="hoasen1"/></span><!--run-->
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_03.png"/></span>
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_04.png" class="slivl" value="hoasen2"/></span><!--run-->
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_05.png"/></span>
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_06.png" class="slivl" value="hoasen3"/></span><!--run-->
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_07.png" class="slivl" value="hoasen4"/></span><!--run-->
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_08.png" class="slivl" value="hoasen5"/></span><!--run-->
                <span class=""><img src="<?= STATIC_PATH_URL ?>images/sen/hoasen_09.png"/></span>

            </div>
           <!-- <img src="<?= STATIC_PATH_URL ?>images/hoa_sen.png"/>
           -->
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".slivl").click(function () {
                    var $id = $(this).attr('value');
                   // alert($id);

                   var $urlhoasen="<?php echo base_url('loadslider'); ?>/"+$id;
                  //  alert($urlhoasen);
                    $(".loadsliderfromhoasenimg").load($urlhoasen);
                  /*  if($id=="hoasen1")
                    {
                        $(".htitleservices").html("dsfsdf");
                    }*/
                });
            });

        </script>
        <style type="text/css">.carousel-indicators{ display: none; /*top: 252px;*/}
            .slideprenextdd{ position: relative;}
            .slideprenext{line-height: 16px;
                height: 26px;width: 27px;font-size: 28px;}
            .slilef{left: 43%;}
            .slirig{ right: 43%!important;}
        </style>

        <div class="col-md-7 height455 text-right" style="padding-right: 0px;">
            <h3><font color="white">&nbsp;</font></h3>
            <div class="col-md-12 bacground-sildershow height370 padding-left-right-0 padding-right-35 loadsliderfromhoasenimg" style="margin-left: 40px;">
              <!--  <h3 class="" style="width: 587px; font-size: 25px; margin-top: -17px;">
                    <font color="white">Wedding Car Rental</font>
                </h3>
                <div class="col-md-12 text-center" style="padding-left: 10px; padding-right: 6px;">


                    <div class="">
                        <div class="carousel slide padding-left-right-0" id="myCarouselslider">

                            <ol class="carousel-indicators">
                                <li class="" data-slide-to="0" data-target="#myCarouselslider"></li>
                                <li data-slide-to="1" data-target="#myCarouselslider" class=""></li>
                                <li data-slide-to="2" data-target="#myCarouselslider" class="active"></li>
                            </ol>

                            <div class="carousel-inner ">
                                -->
                                <?= modules::run('Slider/imagecompany') ?>
                              <!--   <div class="item">
                                     <div class="row-fluid">
                                         <div class="span12"><a class="thumbnail" href="#x"><img style="max-width:100%;" alt="Image" src="<?= STATIC_PATH_URL ?>images/slider.jpg" height="225"></a></div>

                                     </div>
                                 </div>

                                 <div class="item">
                                     <div class="row-fluid">
                                         <div class="span12"><a class="thumbnail" href="#x"><img style="max-width:100%;" alt="Image" src="<?= STATIC_PATH_URL ?>images/slider.jpg" height="225"></a></div>

                                     </div>
                                 </div>

                                 <div class="item active">
                                     <div class="row-fluid">
                                         <div class="span12"><a class="thumbnail" href="#x"><img style="max-width:100%;" alt="Image" src="<?= STATIC_PATH_URL ?>images/slider.jpg" height="225"></a></div>

                                     </div>
                                        -->
                               <!--  </div>


                            </div>
                            <div class="slideprenextdd" style="margin-top: -20px;">
                                <a data-slide="prev" href="#myCarouselslider" class="left carousel-control slideprenext slilef">‹</a>
                                <a data-slide="next" href="#myCarouselslider" class="right carousel-control slideprenext slirig">›</a>
                            </div>
                        </div>

                    </div>
                </div>-->
            </div>
            <!--end silder-->
                    <!--end slider-->

                    <!--<img src="<?= STATIC_PATH_URL ?>images/slider.jpg" height="225">-->
                </div>
               <!-- <div class="col-md-12 text-center padding-top-10">
                    <img src="<?= STATIC_PATH_URL ?>images/icon-botton.png">
                </div>
                -->
            </div>
            <!--  <img src="" height="370"/>-->
        </div>
    </div>
</div>
<div class="col-md-12 padding-left-right-0 padding-top-20">
    <div class="container silder">
        <!--silder-->
        <div class="row">

<!--slider-->
                <?=modules::run('Slider/imagecompanyabout') ?>
                <!--silder-->
<!--
            <div class="span12">
                <div class="">
                    <div class="carousel slide" id="myCarousel">

                        <ol class="carousel-indicators">
                            <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                            <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                            <li data-slide-to="2" data-target="#myCarousel" class="active"></li>
                        </ol>


                        <div class="carousel-inner">
                            <? //= modules::run('Slider/imagecompanyabout') ?>

                        </div>

                        <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
                    </div>

                </div>
            </div>
            -->
        </div>
        <!--end silder-->
    </div>
    <div class="container boder-bottom-1" style="padding-bottom: 20px;">
        <div class="col-md-12">
            <?= stripslashes($info->content) ?>
           <!-- <h2 class="text-center"><font size="5">CAN WE HELP YOU FIND SOMETHING?</font></h2>
            <div class="col-md-12">
                <div class="col-md-4">
                    <h4>There's something I want to do</h4>
                    <p>Register</p>
                    <p>| Cancel a booking</p>
                    <p>| Get a Receipt</p>
                    <p>| Feedbacks</p>
                </div>
                <div class="col-md-4">
                    <h4>I’m looking for Information</h4>
                    <p>Contact Us</p>
                    <p>| Maintenance</p>
                    <p>| Careers</p>
                    <p>| Partner</p>
                </div>
                <div class="col-md-4">
                    <h4>I'd like to keep in touch</h4>
                    <p>Get news & offers straight to your inbox</p>

                    <div class="input-group">
                        <input type="text" placeholder="Your email address" class="form-control" style="height: 30px">
                        <span class="input-group-btn">
                           <button type="button" class="btn btn-boton-note">Sign Up</button>
                        </span>
                    </div>
                    <p>
                        Stay connected with us:
                    </p>
                    <p class="text-right">
                        <img width="40" height="40" src="<?= STATIC_PATH_URL ?>images/facebook.gif">
                        <img width="40" height="40" src="<?= STATIC_PATH_URL ?>images/google.gif">
                        <img width="40" height="40" src="<?= STATIC_PATH_URL ?>images/rss.gif">
                    </p>
                </div>
            </div>
            -->
        </div>
    </div>
</div>