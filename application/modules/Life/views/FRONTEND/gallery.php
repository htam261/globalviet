<div class="container">

    <div class="block">
        <h2 class="title-block"><span>HÌNH ẢNH CÔNG TRÌNH</span></h2>

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <? $items = $congtrinh["list_article"];
                foreach ($items as $item): ?>
                    <div class="swiper-slide item-img">
                        <img class="thumb-nail" src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail, 220, 160) ?>"
                             alt="slide"/>

                        <div class="content">
                            <h5 class="title"><?= stripslashes($item->title) ?></h5>

                            <p class="description"><?= stripslashes($item->summary) ?></p>

                            <p><a class="btn btn-default btn-detail"
                                  href="<?= site_url($congtrinh["slug_cat"] . '/' . $item->alias) ?>.html"
                                  role="button">Chi tiết</a></p>
                        </div>
                    </div>
                <? endforeach; ?>

            </div>
            <!-- Add Pagination -->

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <!-- .block --></div>

    <!-- .container --></div>
<!-- .main-content -->