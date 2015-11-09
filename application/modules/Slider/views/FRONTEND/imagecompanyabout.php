<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/23/2015
 * Time: 9:40 AM
 */
?>
<? if (!empty($results)): ?>
<div class="item active">
    <div class="row-fluid">
    <? $i=1;
    $j=3;?>
    <? $items = $results; //var_dump($items);exit();
    if($items){
        if(count($items)>=$i){
            foreach ($items as $item): ?>
                <? if($i<=$j){?>
                    <div class="span4 text-center">
                        <a class="thumbnail" href="#x" style="background: #d1d2d4;">
                            <img style="max-width: 100%; width: 324px; height: 250px;" alt="Image" src="<?= img(DIR_UPLOAD_SLIDER . $item['image'],300,250) ?>" height="250"></a>
                        <?=$item['name']?></div>

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
    $start=4;
    $j=6;?>
    <? $items = $results; //var_dump($items);//exit();
    if($items){
        if(count($items)>=$start){
            foreach ($items as $item): ?>
                <? if($i>=$start && $i<=$j){?>

                    <div class="span4 text-center"><a class="thumbnail" href="#x" style="background: #d1d2d4;"><img style="max-width: 100%; width: 324px; height: 250px;" alt="Image" src="<?= img(DIR_UPLOAD_SLIDER . $item['image'],300,250) ?>" height="250"></a> <?=$item['name']?></div>


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
    $start=7;
    $j=9;?>
    <? $items = $results; //var_dump($items);//exit();
    if($items){
        if(count($items)>=$start){
            foreach ($items as $item): ?>
                <? if($i>=$start && $i<=$j){?>
                    <div class="span4 text-center">
                        <a class="thumbnail" href="#x" style="background: #d1d2d4;">
                            <img style="max-width: 100%; width: 324px; height: 250px;" alt="Image"
                                 src="<?= img(DIR_UPLOAD_SLIDER . $item['image'],300,250) ?>" height="250">
                        </a> <?=$item['name']?>
                    </div>


                <? } ?>
                <?php $i++; ?>
            <? endforeach;?>
        <? }
    }?>
  </div><!--/row-fluid-->
                    </div><!--/item-->
<? endif; ?>