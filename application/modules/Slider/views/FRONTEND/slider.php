<? if (!empty($results)): ?>
    <div class="slider">
        <? if ($position !== "HOME"): ?>
        <div class="container"><? endif; ?>

            <div class="carousel" data-transition="slide" data-autoplay data-interval="5000">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <? $index = 0; ?>
                        <? foreach ($results as $item): ?>
                            <li data-target="#myCarousel" data-slide-to="<?= $index ?>"
                                class="<? echo $index == 0 ? "active" : "" ?>"></li>
                            <? $index++;   endforeach; ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <? $index = 0; ?>
                        <? foreach ($results as $item): ?>
                            <div class="item <? echo $index == 0 ? "active" : "" ?>">
                                <img class="first-slide"
                                     src="<?= img(DIR_UPLOAD_SLIDER . $item['image'], $item['width'], $item['height']) ?>"
                                     alt="First slide">
                            </div>
                            <?
                            $index++;
                        endforeach; ?>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- /.carousel --></div>
            </div>
            <? if ($position !== "HOME"): ?></div><? endif; ?>
    </div>
<? endif; ?>