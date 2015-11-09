<div class="col-md-12 divcontain bacground-while padding-left-right-0">
    <div class="col-md-12 padding-left-right-0">
        <img src="<?= STATIC_PATH_URL ?>images/web-RRIV-finall1_03.jpg" class="img-46" height="46"/>
    </div>
    <div class="row padding-left-right-0">
        <!--gioi thiêu-->
        <div class="col-md-9 boder-bottom-1-">
            <div class="jumbotron magin-bottom-0 bacground-while padding-top-0">
                <h1><b style="text-transform: uppercase;font-size: 22px; "><? _T("About us")?></b></h1>
                <div class="row ">
                    <?= parserEditorHTML(stripslashes($result->content)) ?>
                </div>
            </div>
        </div>
        <!--end gioi thieu-->
        <div class="col-md-3">
            <div class="row">
                <div class="col-sm-6 col-md-12 color-black">
                    <h3 class="tieudedanhmuc80">
                        <font size="3" color="black"><? _T("Category")?></font>
                    </h3>
                    <div class="col-lg-12 boder-top-2 padding-top-bottom-10 padding-left-0">
                        <?php if($this->session->userdata('site_lang')!='en'){?>
                        <p><i class="glyphicon-ico-green"></i> <a href="<?php base_url() ?>/gioi-thieu/nghien-cuu-va-phat-trien.html">Nghiên cứu và phát triển</a></p>
                        <p><i class="glyphicon-ico-green"></i> <a href="<?php base_url() ?>/gioi-thieu/san-xuat-kinh-doanh.html">Sản xuất kinh doanh</a> </p>
                        <p><i class="glyphicon-ico-green"></i> <a href="<?php base_url() ?>/gioi-thieu/co-cau-to-chuc.html">Cơ cấu -tổ chức</a></p>
                        <?php }
                        else{?>
                            <p><i class="glyphicon-ico-green"></i> <a href="<?php base_url() ?>/about/research-development.html">Research and development</a></p>
                            <p><i class="glyphicon-ico-green"></i> <a href="<?php base_url() ?>/about/manufacturing-business.html">Manufacturing business</a> </p>
                            <p><i class="glyphicon-ico-green"></i> <a href="<?php base_url() ?>/about/organizational-structure.html">Organizational structure</a></p>
                        <?php }?>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 color-black padding-left-right-0">
                    <div class="col-md-12">
                        <img src="<?= STATIC_PATH_URL ?>images/Layer-26.jpg" style="height:365px;" class="img-responsive width-img-100-100 width-img-80-80" alt="" title="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>