<!-- begin post -->
<?
if (!empty($results)):

    foreach ($results as $item) {
        $category = $this->model->getCategoryById($item->catid);
        $cat_slug = $category->alias;
        ?>
        <div class="news-item">
            <div class="thumb-news">
                <div class="thumb-cover"></div>
                <img class="img-full" src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail, 225, 163) ?>"
                     alt="<?= stripslashes($item->title); ?>"/>
            </div>
            <div class="news-box-right">
                <h5 class=""><?= stripslashes($item->title); ?></h5>

                <p class="post-time"><em><?= date('d-m-Y', strtotime($item->created_date)) ?></em></p>

                <p><?= character_limiter($item->summary, 150); ?></p>
                <a href="<?= site_url($cat_slug . '/' . $item->alias) ?>.html"
                   title="<?= stripslashes($item->title); ?>" class="hightline more"><i
                        class="fa fa-angle-double-right"></i>MORE</a>
            </div>
        </div>
    <?
    }
else: ?>
    <div>Không tìm thấy theo yêu cầu!</div>
<? endif; ?>
<!-- end post -->
