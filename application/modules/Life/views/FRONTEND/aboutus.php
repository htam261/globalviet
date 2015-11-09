<div class="col-md-12">
    <div class="container boder-bottom-1 padding-top-bottom-15">

        <div class="col-md-12 padding-left-right-0">
            <div class="">
                <div class="col-md-12 padding-left-right-0">
                    <div class="col-md-12 padding-left-right-0">
                        <div class="padding-top-bottom-15">

                            <div class="col-md-6 padding-left-right-0 padding-top-15">
                                <div class="col-md-12 padding-left-right-0">
                                    <img src="<?= img(DIR_UPLOAD_NEWS . $result->thumbnail,539 ,330) ?>" class="img-responsive" alt="...">
                                   <!-- <img src="<?= STATIC_PATH_URL ?>images/about.jpg" class="img-responsive" alt="...">
                                    -->
                                </div>
                            </div>
                            <div class="col-md-6 padding-left-right-0 padding-left-20">
                                <h3 class="margin-top-0 text-uppercase" >
                                    <font size="2" style="font-weight: bold;"><?=$result->title?><!--GIỚI THIỆU VỀ GLOBALVIETTRAVEL--></font>
                                </h3>
                                <div class="chitiet serviceschil">
                                    <?= parserEditorHTML(stripslashes($result->content)) ?>
                                    <!--
                                    <p><i class="glyphicon-ico-point"></i><font> <b>Ưu điểm 1</b></font></p>
                                    <p class="text-justify">Cum sociis natoque penatibus et magnis dis parturient mo ntes, nascetur ridiculus mus. Quisque vel ante quis
                                    </p>
                                    <p><i class="glyphicon-ico-point"></i><font> <b>Ưu điểm 2</b></font></p>
                                    <p class="text-justify">Cum sociis natoque penatibus et magnis dis parturient mo ntes, nascetur ridiculus mus. Quisque vel ante quis
                                    </p>
                                    <p><i class="glyphicon-ico-point"></i><font> <b>Ưu điểm 3</b></font></p>
                                    <p class="text-justify">Cum sociis natoque penatibus et magnis dis parturient mo ntes, nascetur ridiculus mus. Quisque vel ante quis
                                    </p>
                                    <p><i class="glyphicon-ico-point"></i><font> <b>Ưu điểm 4</b></font></p>
                                    <p class="text-justify">Cum sociis natoque penatibus et magnis dis parturient mo ntes, nascetur ridiculus mus. Quisque vel ante quis
                                    </p>
                                    -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>