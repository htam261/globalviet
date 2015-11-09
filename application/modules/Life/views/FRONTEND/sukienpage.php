<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/20/2015
 * Time: 2:15 PM
 */
?>
    <div class="col-md-12">
    <div class="container">
    <div class="col-md-3">
        <div class="row padding-left-right-0">
            <div class="col-sm-6 col-md-12 color-black">
                <h3 class="tieudedanhmuc80">
                    <font size="3" color="black">Danh Mục</font>
                </h3>
                <div class="col-lg-12 boder-top-2 padding-top-bottom-10 padding-left-0">
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
    <div class="col-md-9" >
    <div class="row detaillnew">
<? $items = $eventarticle["list_article"]; $i=0;//var_dump($items);exit();
if($items){
    foreach ($items as $item): ?>
        <div class="col-md-12  boder-bottom-1  padding-top-bottom-5">
            <div class="media">
                <div class="media-left media-middle text-center">
                    <a href="#">
                        <img width="250" height="180" title="..." alt="..." src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail,250,163) ?>" class="img-responsive">
                    </a>
                </div>
                <div class="media-body">
                    <h4 title="<?=stripslashes($item->title)?>" class="media-heading">
                        <a href=""> <?=stripslashes($item->title)?> </a>
                    </h4>
                    <p>
                        <font class="color-black">
                            <i class="glyphicon glyphicon-tags"></i> Lorem istal , Inpull
                            &nbsp; &nbsp;
                            <i class="glyphicon glyphicon-comment"></i> 3 comments
                        </font>
                    </p>
                    <p class="text-justify">
                        <?=character_limiter(strip_tags($item->summary),300)."..."?>
                    </p>
                </div>
            </div>
        </div>
        <?php $i++; ?>
    <? endforeach;
}else{?>
    <div class="col-md-12  boder-bottom-1  padding-top-bottom-5">
        <div class="media">
            <div class="media-body">
                <p class="text-justify">
                    Thông tin đang được cập nhật
                </p>
            </div>
        </div>
    </div>
<?php
}
?>
        <div class="phantrang">
            <nav class="text-right">
                <ul class="pagination">
                    <? $items = $counteventarticle;
                    if($items && $items>=0) {
                        $totalRows = $items;//
                        $pageNum = 1;//trang bat dau
                        $pageSize = 20;//gioi han cho 1 trang
                        $offset = 20;//so lan tang len
                        $totalPages = ceil($totalRows / $pageSize);//tong so trang load
                        $from = $pageNum - $offset;
                        $to = $pageNum + $offset;
                        if ($totalPages > 1) {
                            if ($from <= 0) {
                                $from = 1;
                                $to = $offset * 2;
                            }
                            if ($to > $totalPages) {
                                $to = $totalPages;
                            }
                            $links = "";
                            $url = base_url() . "event/";
                            ?>
                            <?
                            for ($j = $from; $j <= $to; $j++) {
                                if ($j == $pageNum) $links = "<li class='active'><a href='" . $url . "'>" . $j . " <span class='sr-only'>(current)</span></a></li>";
                                else $links = $links . "<li><a href='" . $url . $j . "'>" . $j . " <span class='sr-only'>(current)</span></a></li>";
                            }
                            $firstLink = "";
                            $prevLink = "";
                            $lastLink = "";
                            $nextLink = "";
                            if ($pageNum > 1) {
                                $prevPage = $pageNum - 1;
                                $prevLink = " <li class='disabled'><a href='" . $url . $prevPage . "' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
                            }
                            if ($pageNum < $totalPages) {
                                $nextPage = $pageNum + 1;
                                $nextLink = "<li><a href='" . $url . $nextPage . "' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
                            }
                            echo $prevLink . $links . $nextLink;
                        }
                        ?>

                    <? }?>
                    <!--  <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class=""><a href="#">2 <span class="sr-only">(current)</span></a></li>
                      <li class=""><a href="#">3 <span class="sr-only">(current)</span></a></li>
                      <li class=""><a href="#">4 <span class="sr-only">(current)</span></a></li>
                      <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                      -->
                </ul>
            </nav>
        </div>
    </div>
    </div>
    </div>
    </div>