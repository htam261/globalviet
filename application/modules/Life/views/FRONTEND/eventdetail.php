<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/20/2015
 * Time: 4:05 PM
 */
?>
<div class="col-md-12">
    <div class="container boder-bottom-1">
        <div class="col-md-3">
            <div class="row padding-left-right-0">
                <div class="col-sm-6 col-md-12 color-black">
                    <h3 class="tieudedanhmuc80">
                        <font size="3" color="black">Danh Mục</font>
                    </h3>
                    <div class="col-lg-12 padding-top-bottom-10 padding-left-0">


                        <? $items = $eventmenu["list_article"]; $i=0;//var_dump($items);exit();
                        if($items){
                            foreach ($items as $item): ?>
                                <a href="<?= site_url('event/'.$item->alias.'-'.$item->id) ?>.html">
                                    <? if($activemenu==($item->alias))
                                    {
                                        $categoryselectd="categoryselectd";
                                        $glyphiconicodot="glyphicon-ico-dotselted";
                                    }
                                    else
                                    {
                                        $categoryselectd="";
                                        $glyphiconicodot="glyphicon-ico-dot";
                                    }
                                    ?>
                                    <p class="<?=$categoryselectd?>">
                                        <i class="<?=$glyphiconicodot?>"></i>
                                        <font > <?=character_limiter(strip_tags($item->name),40)?></font>
                                    </p></a>
                                <?php $i++; ?>
                            <? endforeach;
                        }else{?>
                            <p class=""><i class="glyphicon-ico-dot "></i><font color=""> Watting Update</font></p>
                        <?php
                        }
                        ?>


                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9 padding-top-bottom-15" >
            <div class="row detaillnew">

                        <div class="col-md-12  padding-top-bottom-5">
                            <div class="media">
                               <!-- <div class="media-left media-middle text-center">
                                    <a href="#">
                                        <img width="250" height="180" title="..." alt="..." src="<?= img(DIR_UPLOAD_NEWS . $result->thumbnail,250,163) ?>" class="img-responsive">
                                    </a>
                                </div>-->
                                <div class="media-body">
                                    <h4 title="<?=stripslashes($result->title)?>" class="media-heading">
                                        <a href=""> <?=stripslashes($result->title)?> </a>
                                    </h4>
                                    <p>
                                        <font class="color-black">
                                            <i class="glyphicon glyphicon-tags"></i> Lorem istal , Inpull
                                            &nbsp; &nbsp;
                                            <i class="glyphicon glyphicon-comment"></i> 3 comments
                                        </font>
                                    </p>
                                    <div class="text-justify">
                                        <?= stripslashes($result->content) ?>
                                        <? //=$result->summary?>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        </div>
    </div>
</div>