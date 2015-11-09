<div class="row">
    <?= modules::run('media/getMedia', 'programmes') ?>
    <div class="col-md-3 col-sm-3 col-xs-12  margin-top-42">
        <ul class="menu-left">
            <li><a href="<?php base_url() ?>/programmes.html" class="active font-normal"><? _T('Preschool and Kindergarten')?></a>
            </li>
        </ul>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <h5 class="bold margin-top-42"><?= $result->title ?></h5>
        <?= parserEditorHTML($result->content); ?>
    </div>

    <?= modules::run('life/enrolform') ?>
</div>
<div class="socail-content">
    <a href="<?= modules::run('life/getSetting', 'facebook') ?>" class="facebook"></a>
    <a href="<?= modules::run('life/getSetting', 'instagram') ?>" class="instagram"></a>
</div>