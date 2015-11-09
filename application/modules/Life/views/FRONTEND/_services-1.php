<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/20/2015
 * Time: 10:56 AM
 */
?>
<div class="col-md-12">
    <div class="container boder-bottom-1">
        <div class="col-md-3">
            <div class="row padding-left-right-0">
                <div class="col-sm-6 col-md-10 color-black padding-left-right-0" style="background-color: #ffffff">
                    <h3 class="tieudedanhmuc80 margin-top-0 servicesh3" >
                        <font>Services</font>
                    </h3>
                    <div class="col-lg-12 boder-top-2 padding-top-bottom-10">

                        <? $items = $eventmenu["list_article"]; $i=0;//var_dump($items);exit();
                        if($items){
                            foreach ($items as $item): ?>
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
                       <!-- <a href="#" ><p class="categoryselectd"><i class="glyphicon-ico-iconnext"></i> Xe cao cấp</p></a>
                        <a href="#" ><p class=""><i class="glyphicon-ico-iconnext "></i><font color=""> Xe du lịch</font></p></a>
                        <a href="#" ><p class=""><i class="glyphicon-ico-iconnext "></i><font color=""> Xe công tác</font></p></a>
                        <a href="#" ><p class=""><i class="glyphicon-ico-iconnext "></i><font color=""> Xe đưa đón sân bay</font></p></a>
                        -->
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9 padding-left-right-0">
            <div class="row detaillnew">
                <div class="col-md-12 padding-left-right-0">
                    <div class="col-md-12 padding-left-right-0">
                        <div class="row seractive">
                            <? $items = $servicesarticle["list_article"]; $i=0;//var_dump($items);exit();
                            if($items){
                                $i=1;

                            foreach ($items as $item): ?>
                                <? if($i==1) {$active=" active";}
                                else{ $active="";}
                                ?>
                            <div class="col-sm-6 col-md-3 padding-left-0">
                                <div class="thumbnail <?=$active?>">
                                    <img src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail, 198, 114) ?>" class="img-responsive" alt="...">
                                    <div class="caption">
                                        <h3 style="border-bottom: 2px solid darkgray; color: green" title="<?=strip_tags($item->title)?>"><?=character_limiter(strip_tags($item->title),14)?></h3>
                                        <div class="chitiet">
                                            <?= stripslashes($item->summary) ?>
                                          <!--  <p><span>Nội thành:</span><span>1.000.000 VNĐ/8h</span></p>
                                            <p><span>Ngoại thành:</span><span>1.500.000 VNĐ/8h</span></p>
                                            <p><span>Sân bay:</span><span>500.000 VNĐ/3h</span></p>
                                            <p><span>Phí quá giờ:</span><span>70.000 VNĐ/h</span></p>-->
                                            <p><a href="<?php base_url() ?>/services/<?=$item->alias?>.html"><font color="green">Xem chi tiết</font></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php $i++; ?>
                            <? endforeach;
                            }else{?>
                                <div class="col-md-12 padding-left-0">
                                    <h3 style="border-bottom: 2px solid darkgray; color: green">Đang cập nhật thông tin</h3>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <!--
                <div class="phantrang">
                    <nav class="text-right">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
                            <li class=""><a href="#">4 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                        </ul>
                    </nav>
                </div>
                -->
            </div>
        </div>
    </div>
</div>