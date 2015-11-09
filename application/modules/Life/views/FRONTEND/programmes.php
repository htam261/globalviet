<div class="row">
    <?= modules::run('media/getMedia', $this->router->fetch_method()) ?>
    <div class="clearfix"></div>
    <div class="col-md-3 col-sm-3 col-xs-12 margin-top-42">
        <ul class="menu-left">
            <li><a href="<?php base_url() ?>/programmes.html" class="active"><? _T('Preschool and Kindergarten') ?></a>
            </li>

        </ul>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 margin-top-42" id="lstNews">
        <?
        if (!empty($results)):

            foreach ($results as $item) {
                $category = $this->model->getCategoryById($item->catid);
                ?>
                <div class="news-item">
                    <div class="thumb-news">
                        <div class="thumb-cover"></div>
                        <img class="img-full" src="<?= img(DIR_UPLOAD_NEWS . $item->thumbnail) ?>"
                             alt="<?= stripslashes($item->title); ?>"/>
                    </div>
                    <div class="news-box-right">
                        <h5 class=""><?= stripslashes($item->title); ?></h5>


                        <p><?= character_limiter($item->summary, 150); ?></p>
                        <a href="<?= site_url($cat_slug . '/' . $item->alias) ?>.html"
                           title="<?= stripslashes($item->title); ?>" class="hightline more"><i
                                class="fa fa-angle-double-right"></i><? _T("MORE") ?></a>
                    </div>
                </div>
            <?
            }
        else: ?>
            <div><? _T("Updating!!!") ?></div>
        <? endif; ?>
    </div>
    <?= modules::run('life/enrolform') ?>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <?php echo $pagination; ?>
    </div>
</div>
<div class="socail-content">
    <a href="<?= modules::run('life/getSetting', 'facebook') ?>" class="facebook"></a>
    <a href="<?= modules::run('life/getSetting', 'instagram') ?>" class="instagram"></a>
</div>

<script>
    setActive('programmes');
</script>