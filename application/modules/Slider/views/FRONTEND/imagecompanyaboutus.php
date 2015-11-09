<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 8/20/2015
 * Time: 5:32 AM
 */
?>
<? if (!empty($results)): ?>
<div class="span12">
<link href="<?=STATIC_PATH_URL?>css/sliderdemo.css" rel="stylesheet">
<script src="<?=STATIC_PATH_URL?>js/jquery.scrollbox.js"></script>
<div id="demo5" class="scroll-img col-md-12 carousel" style="height: 305px">
    <ul>
    <? $items = $results; //var_dump($items);exit();
    if($items){

            foreach ($items as $item): ?>
        <li class="span4 text-center">
            <a href="#" style="background: #d1d2d4;">
                <img src="<?= img(DIR_UPLOAD_SLIDER . $item['image'],300,250) ?>"
                     height="250" style="max-width: 100%; width: 324px; height: 250px;" class="thumbnail"/>

            </a><p><?=$item['name']?></p>
        </li>
            <? endforeach;?>
        <?
    }?>
      <!--  <li class="span4 text-center">
            <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
                <img src="http://placehold.it/325x250" style="max-width: 100%; width: 324px; height: 250px;"
                     height="250" class="thumbnail">

            </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        <li class="span4 text-center">
            <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
                <img src="http://globalviet.localhost:8080/static/cache/300x250/1437619623_carfortravellingjgp.jpg"
                     class="thumbnail"  style="max-width: 100%; width: 324px; height: 250px;"  height="250">

            </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        <li class="span4 text-center">
            <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
                <img src="http://placehold.it/325x250" style="max-width: 100%; width: 324px; height: 250px;" class="thumbnail" height="250">

            </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        <li class="span4 text-center">
            <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
                <img src="http://placehold.it/325x250"  style="max-width: 100%; width: 324px; height: 250px;" class="thumbnail" height="250">

            </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        <li class="span4 text-center"">
        <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
            <img src="http://placehold.it/325x250" style="max-width: 100%; width: 324px; height: 250px;" class="thumbnail" height="250">

        </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        <li class="span4 text-center">
            <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
                <img src="http://placehold.it/325x250" style="max-width: 100%; width: 324px; height: 250px;" class="thumbnail" height="250">

            </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        <li class="span4 text-center">
            <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
                <img src="http://placehold.it/325x250" style="max-width: 100%; width: 324px; height: 250px;" class="thumbnail" height="250">

            </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        <li class="span4 text-center">
            <a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank" style="background: #d1d2d4;">
                <img src="http://placehold.it/325x250" style="max-width: 100%; width: 324px; height: 250px;" class="thumbnail" height="250">

            </a><p>concept hầm hố của Infiniti Q30</p>
        </li>
        -->
    </ul>
    <div id="demo5-btn" class="text-center">
        <button class="left btn" id="demo5-backward"><i class="icon-chevron-left"></i></button>
        <button class="right btn" id="demo5-forward"><i class="icon-chevron-right"></i></button>
    </div>
</div>


<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
 <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
 <!--<div id="demo5-btn" class="text-center">
     <button class="left btn" id="demo5-backward"><i class="icon-chevron-left"></i> Backward</button>
     <button class="right btn" id="demo5-forward">Forward <i class="icon-chevron-right"></i></button>
 </div>-->
<script type="text/javascript">
    $('#demo5').scrollbox({
        direction: 'h',
        distance: 134
    });
    $('#demo5-backward').click(function () {
        $('#demo5').trigger('backward');
    });
    $('#demo5-forward').click(function () {
        $('#demo5').trigger('forward');
    });
</script>
</div>
<? endif; ?>