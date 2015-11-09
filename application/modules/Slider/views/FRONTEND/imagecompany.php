<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/23/2015
 * Time: 9:40 AM
 */
?>

    <h3 class="width-reponsive-553 width-587" style="font-size: 25px; margin-top: -17px;">
        <font color="white" class="htitleservices"><?=$Tileservices?></font>
    </h3>
    <div class="col-md-12 text-center" style="padding-left: 10px; padding-right: 6px;">
    <!--silder-->

    <div class="">
    <div class="carousel slide padding-left-right-0" id="myCarouselslider">

    <ol class="carousel-indicators">
        <li class="" data-slide-to="0" data-target="#myCarouselslider"></li>
        <li data-slide-to="1" data-target="#myCarouselslider" class=""></li>
        <li data-slide-to="2" data-target="#myCarouselslider" class="active"></li>
    </ol>

    <!-- Carousel items -->
    <div class="carousel-inner loadsliderfromhoasenimg">


<? if (!empty($results)): ?>

        <? $i=1;
        $j=3;?>
        <? $items = $results; //var_dump($items);exit();
        if($items){
        if(count($items)>=$i){
        foreach ($items as $item): ?>
        <? if($i<=$j){?>
           <div class="item <? if($i==1) echo " active"?>">
                <div class="row-fluid">
                    <div class="span12"><a class="thumbnail" href="#x" style="padding: 0px; border-width: 0px;"><img style="max-width:100%;" alt="Image" src="<?= img(DIR_UPLOAD_SLIDER . $item['image'],599,267) ?>" height="225" style="max-width: 100%; width: 305px;"></a></div>
                </div><!--/row-fluid-->
           </div><!--/item-->
            <? } ?>
            <?php $i++; ?>
        <? endforeach;?>
        <? }
        }?>



    <? $i=1;
    $start=4;
    $j=6;?>
    <? $items = $results;
    if($items){
        if(count($items)>=$start){
            foreach ($items as $item): ?>
                <? if($i>=$start && $i<=$j){?>
                    <div class="item">
                        <div class="row-fluid">
                            <div class="span12"><a class="thumbnail" href="#x" style="padding: 0px; border-width: 0px;"><img style="max-width:100%;" alt="Image" src="<?= img(DIR_UPLOAD_SLIDER . $item['image'],599,267) ?>" height="225"></a></div>

                        </div><!--/row-fluid-->
                    </div><!--/item-->
                <? } ?>
                <?php $i++; ?>
            <? endforeach;?>
        <? }
    }?>




        <? $i=1;
        $start=7;
        $j=9;?>
        <? $items = $results; //var_dump($items);//exit();
        if($items){
            if(count($items)>=$start){
                foreach ($items as $item): ?>
                    <? if($i>=$start && $i<=$j){?>
                        <div class="item">
                        <div class="row-fluid">
                            <div class="span12"><a class="thumbnail" href="#x" style="padding: 0px; border-width: 0px;"><img style="max-width:100%;" alt="Image" src="<?= img(DIR_UPLOAD_SLIDER . $item['image'],599,267) ?>" height="225"></a></div>
                        </div><!--/row-fluid-->
                        </div><!--/item-->
                    <? } ?>
                    <?php $i++; ?>
                <? endforeach;?>
            <? }
        }?>

<? endif; ?>
    </div>
    </div>
        <div class="slideprenextdd" style="margin-top: -20px;">
            <a data-slide="prev" href="#myCarouselslider" class="left carousel-control slideprenext slilef">‹</a>
            <a data-slide="next" href="#myCarouselslider" class="right carousel-control slideprenext slirig">›</a>
        </div>
    </div>

    </div>
    </div>