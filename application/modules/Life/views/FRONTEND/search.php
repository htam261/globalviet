<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/13/2015
 * Time: 10:31 AM
 */
?>
    <div class="col-md-12 divcontain bacground-while padding-left-right-0">
        <div class="col-md-12 padding-left-right-0">
            <img src="<?= STATIC_PATH_URL ?>images/web-RRIV-finall1_03.jpg" class="img-46" height="46"/>
        </div>
        <div class="row padding-left-right-0">
            <!--gioi thiêu-->
            <div class="col-md-9">
                <div class="jumbotron magin-bottom-0 bacground-while padding-top-0">
                    <div class="row detaillnew">
                        <? $items = $searchrd["list_article"];
                        $i=0;//var_dump($items);exit();
                        if($items){
                            foreach ($items as $item): ?>
                                <div class="col-md-12 <?php if(count($items)-1>$i)echo " boder-bottom-1 "?> padding-top-bottom-5">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="media-heading" title="<?= stripslashes($item->title) ?>">
                                                <?php if($this->session->userdata('site_lang')!='en'){
                                                    $langs="hoatdongdetaill";
                                                }else{$langs="activity-detaill";}
                                                ?>

                                                <a href="<?= site_url($langs.'/' . $item->alias) ?>.html"> <?= stripslashes($item->title) ?></a>
                                            </h4>
                                            <p>
                                                <font class="color-black">
                                                    <?php if ($item->created_date == $item->modified_date) {
                                                        $datetime = date_create($item->created_date);
                                                    } else {
                                                        $datetime = date_create($item->modified_date);
                                                    } ?>
                                                    <?php echo date_format($datetime, 'l, j/F/Y | g:i a') ?> GMT+7
                                                    <!--Thứ năm, 18/06/2015 | 16:12 GMT+7--></font>
                                            </p>
                                            <p class="text-justify">
                                                <? //=strlen(utf8_decode(stripslashes($item->summary)))?>
                                                <?php if(strlen(utf8_decode(stripslashes($item->summary)))>=235){
                                                    echo substr(stripslashes($item->summary),0,235)."....";}
                                                else{
                                                    echo substr(stripslashes($item->summary),0,234);
                                                }
                                                ?>
                                                <? //= stripslashes($item->summary) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <? endforeach;
                        }else{?>
                            <? $items = $searchservices["list_article"];
                            $i=0;//var_dump($items);exit();
                            if($items){
                                foreach ($items as $item): ?>
                                    <div class="col-md-12 <?php if(count($items)-1>$i)echo " boder-bottom-1 "?> padding-top-bottom-5">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading" title="<?= stripslashes($item->title) ?>">
                                                    <?php if($this->session->userdata('site_lang')!='en'){
                                                        $langs="tintucsukien";
                                                    }else{$langs="article";}
                                                    ?>

                                                    <a href="<?= site_url($langs.'/' . $item->alias) ?>.html"> <?= stripslashes($item->title) ?></a>
                                                </h4>
                                                <p>
                                                    <font class="color-black">
                                                        <?php if ($item->created_date == $item->modified_date) {
                                                            $datetime = date_create($item->created_date);
                                                        } else {
                                                            $datetime = date_create($item->modified_date);
                                                        } ?>
                                                        <?php echo date_format($datetime, 'l, j/F/Y | g:i a') ?> GMT+7
                                                        <!--Thứ năm, 18/06/2015 | 16:12 GMT+7--></font>
                                                </p>
                                                <p class="text-justify">
                                                    <? //=strlen(utf8_decode(stripslashes($item->summary)))?>
                                                    <?php  if(strlen(utf8_decode(stripslashes($item->summary)))>=235){
                                                        echo substr(stripslashes($item->summary),0,235)."....";}
                                                    else{
                                                        echo substr(stripslashes($item->summary),0,234);
                                                    }
                                                    ?>
                                                    <? //= stripslashes($item->summary) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                <? endforeach;
                            }
                            else
                            {
                                 $items = $searcharticle["list_article"];
                                $i=0;//var_dump($items);exit();
                                if($items){
                                    foreach ($items as $item): ?>
                                        <div class="col-md-12 <?php if(count($items)-1>$i)echo " boder-bottom-1 "?> padding-top-bottom-5">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading" title="<?= stripslashes($item->title) ?>">
                                                        <?php if($this->session->userdata('site_lang')!='en'){
                                                            $langs="tintucsukien";
                                                        }else{$langs="article";}
                                                        ?>

                                                        <a href="<?= site_url($langs.'/' . $item->alias) ?>.html"> <?= stripslashes($item->title) ?></a>
                                                    </h4>
                                                    <p>
                                                        <font class="color-black">
                                                            <?php if ($item->created_date == $item->modified_date) {
                                                                $datetime = date_create($item->created_date);
                                                            } else {
                                                                $datetime = date_create($item->modified_date);
                                                            } ?>
                                                            <?php echo date_format($datetime, 'l, j/F/Y | g:i a') ?> GMT+7
                                                            <!--Thứ năm, 18/06/2015 | 16:12 GMT+7--></font>
                                                    </p>
                                                    <p class="text-justify">
                                                        <? //=strlen(utf8_decode(stripslashes($item->summary)))?>
                                                        <?php if(strlen(utf8_decode(stripslashes($item->summary)))>=235){
                                                            echo substr(stripslashes($item->summary),0,235)."....";}
                                                        else{
                                                            echo substr(stripslashes($item->summary),0,234);
                                                        }
                                                        ?>
                                                        <? //= stripslashes($item->summary) ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                    <? endforeach;
                                }else
                                {
                                ?>
                                    <div class="col-md-12 boder-bottom-1 padding-top-bottom-5">
                                        <div class="media">
                                            <div class="media-left media-middle text-center">
                                            </div>
                                            <div class="media-body">
                                                <p class="text-justify">
                                                    <? _T("The information you are looking for no");?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        }
                        ?>
                      <!--  <div class="phantrang">
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
-->
                    </div>
                </div>
            </div>
            <!--end gioi thieu-->
            <div class="col-md-3">
                <div class="row padding-left-right-0">

                    <div class="col-sm-6 col-md-12 color-black padding-left-right-0">
                        <div class="col-md-12">
                            <img src="<?= STATIC_PATH_URL ?>images/Layer-26.jpg" style="height:365px;" class="img-responsive width-img-100-100 width-img-80-80" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<? /*$items = $search["list_article"];var_dump($items);exit();
if($items){
    foreach ($items as $item): ?>
        <? var_dump($item);exit();?>
    <? endforeach;
    } */?>