<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 8/6/2015
 * Time: 1:36 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/20/2015
 * Time: 11:14 AM
 */
?>
<!--silder-->
<link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-combined.min.css"/>
<link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/silder-bootstrap.css"/>
<link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/style.css">
<!--end silder-->
<div class="col-md-12">
    <div class="container boder-bottom-1" style="padding-top: 6px;">
        <div class="col-md-3">
            <div class="row padding-left-right-0" style="padding-top: 9px;">
                <div class="col-sm-6 col-md-10 color-black padding-left-right-0" style="background-color: #ffffff">
                    <h3 class="tieudedanhmuc80 margin-top-0 servicesh3" >
                        <font>Services</font>
                    </h3>
                    <div class="col-lg-12 boder-top-2 padding-top-bottom-10">
                        <? $items = $servicesmenu["list_article"]; $i=0;//var_dump($items);exit();
                        if($items){
                            foreach ($items as $item):
                                /*  if($item->id==){
                                      $h3=character_limiter(strip_tags($item->name),40);
                                  }*/
                                ?>

                                <a href="<?= site_url('service/'.$item->alias.'-'.$item->id) ?>.html">
                                    <? if($activemenu==($item->alias))
                                    {
                                        $categoryselectd="categoryselectd";
                                        $glyphiconicodot="glyphicon-ico-iconnext";
                                    }
                                    else
                                    {
                                        $categoryselectd="";
                                        $glyphiconicodot="glyphicon-ico-iconnext";
                                    }
                                    ?>
                                    <p class="<?=$categoryselectd?>">
                                        <i class="<?=$glyphiconicodot?>"></i>
                                        <font > <?=character_limiter(strip_tags($item->name),40)?></font>
                                    </p></a>
                                <?php $i++; ?>
                            <? endforeach;
                        }else{?>
                            <p class=""><i class="glyphicon-ico-iconnext "></i><font color=""> Watting Update</font></p>
                        <?php
                        }
                        ?>
                        <!--
                        <p class="categoryselectd"><i class="glyphicon-ico-iconnext"></i><font > Xe cao cấp</font></p>
                        <p class=""><i class="glyphicon-ico-iconnext "></i><font color=""> Xe du lịch</font></p>
                        <p class=""><i class="glyphicon-ico-iconnext "></i><font color=""> Xe công tác</font></p>
                        <p class=""><i class="glyphicon-ico-iconnext "></i><font color=""> Xe đưa đón sân bay</font></p>
                        -->
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9 padding-left-right-0">
            <div class="row detaillnew">
                <div class="col-md-12 padding-right-0">
                    <div class="col-md-12 padding-right-0">
                        <div class="row seractive">
                            <h3 class="margin-top-0 text-uppercase" >
                                <font color="#009933">

                                    Xe cao cấp
                                </font>
                            </h3>
                            <div class="col-md-6 padding-left-right-0">
                                <div class="col-md-8 padding-left-right-0 uload">
                                    <img id="zoom_02" data-zoom-image="<?=img(DIR_UPLOAD_NEWS . $result->thumbnail,1280,800)?>"
                                         src="<?=img(DIR_UPLOAD_NEWS . $result->thumbnail,305,229)?>"
                                         class="img-responsive" alt="..."
                                         style="height: 229px; width:305px;"
                                        />
                                </div>
                                <div class="col-md-4">
                                    <? $items = $servicesimg["list_article"];//var_dump($items);exit();
                                    if($items){
                                    foreach ($items as $item): ?><!--DIR_UPLOAD_SLIDER-->
                                    <? if($item->col==1){?>
                                        <p><img data-zoom-image="<?=img(DIR_UPLOAD_NEWS . $item->thumbnail,1280,800)?>"
                                                src="<?=img(DIR_UPLOAD_NEWS . $item->thumbnail,305,229)?>"
                                                class="img-responsive current" alt="..."/></p>
                                    <? }else{?>
                                        <p><img data-zoom-image="<?=img(DIR_UPLOAD_SLIDER . $item->thumbnail,1280,800)?>"
                                                src="<?=img(DIR_UPLOAD_SLIDER . $item->thumbnail,305,229)?>"
                                                class="img-responsive current" alt="..."/></p>
                                    <? }?>
                                    <? endforeach;
                                    }?>

                                </div>
                                <!--305px-->
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $(".current").click(function () {
                                            var srcsmaill = $(this).attr('src');
                                            var srczoom = $(this).attr('data-zoom-image');
                                            /*  var uloadimg="<img id='zoom_02' data-zoom-image='" +srcsmaill+"'"+
                                             " src='"+srcsmaill+"'"+
                                             " class='img-responsive' alt='...'"+
                                             +" style='height: 229px; width:305px;'/>";//alert(uloadimg);
                                             */ // $(".uload").load(uloadimg);
                                            //var ud="background-image:url('"+srczoom+"')";//alert(ud);
                                            var ud="overflow: hidden; " +
                                                "background-position: -737.615px -456px; " +
                                                "text-align: center; " +
                                                "background-color: rgb(255, 255, 255); " +
                                                "width: 400px; height: 400px; " +
                                                "float: left; " +
                                                "background-size: 1280px 800px; z-index: 100;" +
                                                " border: 4px solid rgb(136, 136, 136);" +
                                                " background-repeat: no-repeat; " +
                                                "position: absolute; " +
                                                "background-image: url('"+srczoom+"'); top: 0px; left: 320px; display: none;";
                                            $(".zoomWindow").attr("style", ud);
                                            // $(".zoomWindow").style().backgroundImage
                                            $("#zoom_02").attr('data-zoom-image',srczoom);
                                            $("#zoom_02 ").attr('src',srcsmaill);
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-md-6 padding-left-right-0">
                                <h3 class="margin-top-0 text-uppercase" title="<?=strip_tags($result->title)?>" >
                                    <font size="2"><?=character_limiter(strip_tags($result->title),30)?></font>
                                </h3>
                                <div class="chitiet serviceschil">
                                    <?= stripslashes($result->content) ?>
                                    <!-- <p><span>Model:</span><span>Subaru</span></p>
                                     <p><span>Kilometes:</span><span>39.000 km</span></p>
                                     <p><span>Body Type:</span><span>Sedan</span></p>
                                     <p><span>Drivetrain:</span><span>FWD</span></p>
                                     <p><span>Engine:</span><span>V -6 cyl</span></p>
                                     <p><span>Exterior Color:</span><span>Dark Grey</span></p>
                                     <p><span>Interior Color:</span><span>Jet Black</span></p>
                                     <p><span>City Fuel Economy:</span><span>10.8L/100Km</span></p>
                                     <p><span>Hwy Fuel Economy:</span><span>7.7L/100Km</span></p>
                                     -->
                                </div>
                                <div class="col-md-12 padding-left-right-0" >
                                    <div class="form-group">
                                        <input type="button" class="btn btn-green-full border-radius0" value="&nbsp; Thuê xe &nbsp;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="container silder">
                <!--silder-->
                <div class="row">
                    <div class="span12">
                        <div class="">
                            <div class="carousel slide" id="myCarousel">

                                <ol class="carousel-indicators">
                                    <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                                    <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                                    <li data-slide-to="2" data-target="#myCarousel" class="active"></li>
                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <div class="row-fluid">
                                            <? $i=1;
                                            $j=4;?>
                                            <? $items = $servicesarticle["list_article"]; //var_dump($items);exit();
                                            if($items){
                                                if(count($items)>=$i){
                                                    foreach ($items as $item): ?>
                                                        <? if($i<=$j){?>
                                                            <div class="span3">
                                                                <div class="col-md-12 padding-left-0">
                                                                    <div class="thumbnail active">
                                                                        <img src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail, 198, 114) ?>" class="img-responsive" alt="...">
                                                                        <div class="caption">
                                                                            <h3 style="border-bottom: 2px solid darkgray; color: green" title="<?=strip_tags($item->title)?>">
                                                                                <?=character_limiter(strip_tags($item->title),15)?>
                                                                            </h3>
                                                                            <div class="chitiet">
                                                                                <?= stripslashes($item->summary) ?>

                                                                                <p><a href="<?= site_url('services/'.$item->alias) ?>.html"><font color="green">Xem chi tiết</font></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <? } ?>
                                                        <?php $i++; ?>
                                                    <? endforeach;?>
                                                <? }
                                            }?>
                                        </div><!--/row-fluid-->
                                    </div><!--/item-->

                                    <div class="item">
                                        <div class="row-fluid">
                                            <? $i=1;
                                            $start=5;
                                            $j=8;?>
                                            <? $items = $servicesarticle["list_article"]; //var_dump($items);//exit();
                                            if($items){
                                                if(count($items)>=$start){
                                                    foreach ($items as $item): ?>
                                                        <? if($i>=$start && $i<=$j){?>
                                                            <div class="span3">
                                                                <div class="col-md-12 padding-left-0">
                                                                    <div class="thumbnail active">
                                                                        <img src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail, 198, 114) ?>" class="img-responsive" alt="...">
                                                                        <div class="caption">
                                                                            <h3 style="border-bottom: 2px solid darkgray; color: green" title="<?=strip_tags($item->title)?>">
                                                                                <?=character_limiter(strip_tags($item->title),15)?>
                                                                            </h3>
                                                                            <div class="chitiet">
                                                                                <?= stripslashes($item->summary) ?>

                                                                                <p><a href="<?= site_url('services/'.$item->alias) ?>.html"><font color="green">Xem chi tiết</font></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <? } ?>
                                                        <?php $i++; ?>
                                                    <? endforeach;?>
                                                <? }
                                            }?>


                                        </div><!--/row-fluid-->

                                    </div><!--/item-->

                                    <div class="item ">
                                        <div class="row-fluid">

                                            <? $i=1;
                                            $start=9;
                                            $j=12;?>
                                            <? $items = $servicesarticle["list_article"]; //var_dump($items);exit();
                                            if($items){
                                                if(count($items)>=$start){
                                                    foreach ($items as $item): ?>
                                                        <? if($i>=$start && $i<=$j){?>
                                                            <div class="span3">
                                                                <div class="col-md-12 padding-left-0">
                                                                    <div class="thumbnail active">
                                                                        <img src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail, 198, 114) ?>" class="img-responsive" alt="...">
                                                                        <div class="caption">
                                                                            <h3 style="border-bottom: 2px solid darkgray; color: green" title="<?=strip_tags($item->title)?>">
                                                                                <?=character_limiter(strip_tags($item->title),15)?>
                                                                            </h3>
                                                                            <div class="chitiet">
                                                                                <?= stripslashes($item->summary) ?>

                                                                                <p><a href="<?= site_url('services/'.$item->alias) ?>.html"><font color="green">Xem chi tiết</font></a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <? } ?>
                                                        <?php $i++; ?>
                                                    <? endforeach;?>
                                                <? }
                                            }?>
                                            <!--
                                            <div class="span3">
                                                <div class="col-md-12 padding-left-0">
                                                    <div class="thumbnail active">
                                                        <img src="<?= STATIC_PATH_URL ?>images/ser_1.jpg" class="img-responsive" alt="...">
                                                        <div class="caption">
                                                            <h3 style="border-bottom: 2px solid darkgray; color: green">Xe cao cấp 1</h3>
                                                            <div class="chitiet">
                                                                <p><span>Nội thành:</span><span>1.000.000 VNĐ/8h</span></p>
                                                                <p><span>Ngoại thành:</span><span>1.500.000 VNĐ/8h</span></p>
                                                                <p><span>Sân bay:</span><span>500.000 VNĐ/3h</span></p>
                                                                <p><span>Phí quá giờ:</span><span>70.000 VNĐ/h</span></p>
                                                                <p><a href="#"><font color="green">Xem chi tiết</font></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="col-md-12 padding-left-0">
                                                    <div class="thumbnail active">
                                                        <img src="<?= STATIC_PATH_URL ?>images/ser_1.jpg" class="img-responsive" alt="...">
                                                        <div class="caption">
                                                            <h3 style="border-bottom: 2px solid darkgray; color: green">Xe cao cấp 1</h3>
                                                            <div class="chitiet">
                                                                <p><span>Nội thành:</span><span>1.000.000 VNĐ/8h</span></p>
                                                                <p><span>Ngoại thành:</span><span>1.500.000 VNĐ/8h</span></p>
                                                                <p><span>Sân bay:</span><span>500.000 VNĐ/3h</span></p>
                                                                <p><span>Phí quá giờ:</span><span>70.000 VNĐ/h</span></p>
                                                                <p><a href="#"><font color="green">Xem chi tiết</font></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="col-md-12 padding-left-0">
                                                    <div class="thumbnail active">
                                                        <img src="<?= STATIC_PATH_URL ?>images/ser_1.jpg" class="img-responsive" alt="...">
                                                        <div class="caption">
                                                            <h3 style="border-bottom: 2px solid darkgray; color: green">Xe cao cấp 1</h3>
                                                            <div class="chitiet">
                                                                <p><span>Nội thành:</span><span>1.000.000 VNĐ/8h</span></p>
                                                                <p><span>Ngoại thành:</span><span>1.500.000 VNĐ/8h</span></p>
                                                                <p><span>Sân bay:</span><span>500.000 VNĐ/3h</span></p>
                                                                <p><span>Phí quá giờ:</span><span>70.000 VNĐ/h</span></p>
                                                                <p><a href="#"><font color="green">Xem chi tiết</font></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="col-md-12 padding-left-0">
                                                    <div class="thumbnail active">
                                                        <img src="<?= STATIC_PATH_URL ?>images/ser_1.jpg" class="img-responsive" alt="...">
                                                        <div class="caption">
                                                            <h3 style="border-bottom: 2px solid darkgray; color: green">Xe cao cấp 1</h3>
                                                            <div class="chitiet">
                                                                <p><span>Nội thành:</span><span>1.000.000 VNĐ/8h</span></p>
                                                                <p><span>Ngoại thành:</span><span>1.500.000 VNĐ/8h</span></p>
                                                                <p><span>Sân bay:</span><span>500.000 VNĐ/3h</span></p>
                                                                <p><span>Phí quá giờ:</span><span>70.000 VNĐ/h</span></p>
                                                                <p><a href="#"><font color="green">Xem chi tiết</font></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
-->
                                        </div><!--/row-fluid-->
                                    </div><!--/item-->

                                </div><!--/carousel-inner-->

                                <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
                                <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
                            </div><!--/myCarousel-->

                        </div><!--/well-->
                    </div>
                </div>
                <!--end silder-->
            </div>
        </div>
    </div>
</div>
