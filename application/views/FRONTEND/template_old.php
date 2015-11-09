<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Load </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- <link href="<?= STATIC_PATH_URL ?>images/favicon.ico" rel="shortcut icon" />
   -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= STATIC_PATH_URL ?>images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
<!--<meta name="viewport" content="1140">
-->
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/dropdowns-enhancement.css">

    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-datepicker.css" />

    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-chosen.css" />


    <script src="<?= STATIC_PATH_URL ?>js/jquery-latest.min.js" type="text/javascript"></script>
    <script src="<?= STATIC_PATH_URL ?>js/jquery.min.js"></script>
    <script src="<?= STATIC_PATH_URL ?>js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/silder-bootstrap.css"/>
    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/bootstrap-combined.min.css"/>


    <link rel="stylesheet" href="<?= STATIC_PATH_URL ?>css/style.css">

</head>
<body>
<div class="width1024">

<!--div class="col-md-12 padding-left-right-0"
     style="width: 1336px; margin-left: auto; margin-right: auto;"-->

<div class="col-md-12 margin-top-30 sdfsdfsdf" >
    <div class="container bacground-map boder-radius-10 padding-left-right-0 height370">
        <div class="col-md-12 height-200">
            <div class="col-md-5 floadleftdiv">
                <a href="<?php base_url() ?>/">
                    <img src="<?= STATIC_PATH_URL ?>images/logoall_01.png" class="img-responsive"
                         style="/*height: 200px;*/padding-top: 30px; width: 310px;"/>
                </a>
            </div>
            <div class="col-md-7 floadrightdiv">
                <div class="">
                    <ul class="list-inline text-right">

                     <!--   <li class="">-->
                            <?= modules::run('life/loginlogout')?>
                      <!--  </li>
                        <li class="">
                            <a href="<?php base_url() ?>/dang-ky.html">REGISTER |</a>
                        </li>-->
                        <li>
                            <a href="<?php base_url() ?>/lien-he.html"><? _T("CONTACT")?> |</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if($this->session->userdata('site_lang')!='en'){  echo "VI";
                                }
                                else{
                                    echo "EN";
                                }?>
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php base_url() ?>/switchLanguage/vn">VI</a></li>
                                <li><a href="<?php base_url() ?>/switchLanguage/en">EN</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="col-md-12 text-right nonerep">
                    <a href="<?php base_url() ?>/services">
                        <img src="<?= STATIC_PATH_URL ?>images/car_001.png" height="170" style="height: 170px; width: 500px; padding-top: 20px;"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-left: 0px; padding-right: 0px; padding-top: 35px;"><!--20-->
            <hr width="60%"
                style="border-width: 1px; box-shadow: 0 0 5px #ffffff; border-style: solid; border-color: rgb(192, 192, 192); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; text-align: center; margin-left: auto; margin-right: auto;">
        </div>
        <div class="col-md-12 padding-bottom-15">
            <ul class="list-inline menu text-center">
                <?php
                $directory = explode('/',ltrim($_SERVER['REQUEST_URI'],'/'));
                if($this->session->userdata('site_lang')!='en'){
                    $directories = array("index.php", "gioi-thieu","services","event"); // set home as 'index', but can be changed based of the home uri
                    foreach ($directories as $folder){ //var_dump($directory);//exit();
                        $active[$folder] = ($directory[0] == $folder)? "active":"";
                    }
                }
                else {
                    $directories = array("index.php","tintucsukien ","article","activity-r-d","products-services","about","contact-us.html"); // set home as 'index', but can be changed based of the home uri
                    foreach ($directories as $folder){
                        $active[$folder] = ($directory[0] == $folder)? "active":"";
                    }
                }
                ?>
                <li class="col-md-2">

                </li>
                <?php if($this->session->userdata('site_lang')!='en'){?>
                    <li class="col-md-2 border-right-2 <?=($directory[0] ==null)?"active ":" " ?><?php echo $active["index.php"]?>">
                        <a href="<?php base_url() ?>/index.php">Trang Chủ</a>
                    </li>
                    <li class='col-md-2 border-right-2 <?php echo $active["gioi-thieu"]?>'>
                        <a href="<?php base_url() ?>/gioi-thieu">Giới Thiệu</a>
                    </li>
                    <li class='col-md-2 border-right-2 <?php echo $active["services"]?>'>
                        <a href="<?php base_url() ?>/services">Dịch Vụ</a>
                    </li>
                    <li class='col-md-2 <?php echo $active["event"]?>'>
                        <a href="<?php base_url() ?>/event">Sự Kiện</a>
                    </li>
                <?php }
                else{?>
                    <li class="col-md-2 active border-right-2">
                        <a href="<?php base_url() ?>/index.php">Home</a>
                    </li>
                    <li class="col-md-2 border-right-2">
                        <a href="<?php base_url() ?>/gioi-thieu">About Us</a>
                    </li>
                    <li class="col-md-2 border-right-2">
                        <a href="<?php base_url() ?>/services">Service</a>
                    </li>
                    <li class="col-md-2">
                        <a href="<?php base_url() ?>/event">Event</a>
                    </li>
                            <?php }?>
                <li class="col-md-2">

                </li>
            </ul>
        </div>
        <?=modules::run('life/bookingform') ?>
    </div>
</div>

<!--noi dung-->
<?= $content ?>
<!--end noi dung-->
<div class="col-md-12 padding-top-20 borderpadding-left-right-0-top-img padding-bottom-40">
    <div class="container boder-radius-10 padding-left-right-0">
        <div class="col-md-12">
            <div class="col-md-5 floadleftdiv">
                Copyright © Global Viet Travel 2015 | Design by <a href="//vnetwork.vn" target="_blank">Vnetwork</a>
            </div>
            <div class="col-md-7 floadrightdiv text-right">
                Terms & conditions | Privacy policy | Site map
            </div>

        </div>
        <div class="col-md-12 text-center padding-top-20">
            <img src="<?= STATIC_PATH_URL ?>images/gob.png"/>
        </div>
        <div class="col-md-12 text-center">
            <p style="margin-bottom: 0px;">
                <? _T("Add")?>: 15 Dao Duy Anh Str., Ward 9, Phu Nhuan Dist., HCMC, Vietnam
            </p>
            <p>
                <? _T("Tel")?>: 08 38 449 888      -      Fax: 08 38 478 999
            </p>

        </div>
    </div>
</div>
</div>
<script src="<?= STATIC_PATH_URL ?>js/dropdowns-enhancement.js"></script>

<!--ngay thang datepicker-->
<script src="<?= STATIC_PATH_URL ?>js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?= STATIC_PATH_URL ?>js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $('.input-group.date').datepicker({
        language: "vi"
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myCarouselsmall').carousel({
            interval: 5000
        });
        $('#myCarousel').carousel({
            interval: 5000
        });
        $('#myCarouselslider').carousel({
            interval: 2000
        })

    });
</script>
<!--end ngay thang datepicker-->
<script src='<?= STATIC_PATH_URL ?>js/jquery.elevatezoom.js'></script>
<style>
    .zoomLens{ display: inherit!important;}
    .zoomWindow{ width: 425px!important;height: 328px!important; left: 430px !important;}
</style>
<script type="text/javascript">
    $("#zoom_02").elevateZoom();
</script>

<script type="text/javascript">
   // onblur="changecode(this.value)"

    $("#btnok").on('click', function () {
        //var checkbooking=validate();
       // var checkinfo=infoform();
        if(validate() && infoform() )
        {
            $("#btnsubmit").click();
           // alert("ok tổng");
        }

    });

    function infoform()
    {
        var checkphone=false;
        var checkemail=false;
        if($("#txtphone").val()==null || $("#txtphone").val()=="" )
        {
            alert("Chưa chọn SĐT");
            return false;
        }
        else{checkphone=true;}
        if($("#txtemail").val()==null || $("#txtemail").val()=="" )
        {
            alert("Chưa có Email");
            return false;
        }
        else {  checkemail=true; }
        if($("#txtcapcha").val()==null || $("#txtcapcha").val()=="" )
        {
            alert("nhập mã capcha");
            return false;
        }
        if(checkphone&&checkemail)
        {
            $("#txtauthoruser").val(2);
           // return true;
        }
        else{
            $("#txtauthoruser").val(0);
            //alert("nhập đúng thông tin trên");
            return false;
        }
        return true;
        /*if($("#txtauthoruser").val()!=3)
        {
            alert("s");
            return false;
        }*/
    }
    $("#btnsent").on('click', function () {
        var check=validate();
        if(check)
        {
            if(addmodal() ) {
                $("#btnsubmit").click();
               // alert("true");
            }

        }
    });
    function addmodal()
    {
        var authoruser=$("#txtauthoruser").val();
        if(authoruser==1){//da duoc dang ky
            return true;
        }
        if(authoruser==0){//chua duoc dang ky
            $("#btnmodaladd").click();
            return false;
        }
        if(authoruser==2)
        {//lay duoc email va phone
            return true;
        }
    }
    function validate(){
        if($("#txtType").val()==null || $("#txtType").val()=="" )
        {
            alert("Chưa chọn loại xe");
            return false;
        }
        if($("#txtFrom").val()==null || $("#txtFrom").val()=="" )
        {
            alert("Chưa chọn đi từ nơi");
            return false;
        }
        if($("#txtTo").val()==null || $("#txtTo").val()=="" )
        {
            alert("Chưa chọn nơi đến");
            return false;
        }
        if($("#txtDate").val()==null || $("#txtDate").val()=="" )
        {
            alert("Chưa chọn Ngày đi");
            return false;
        }
        var now = new Date();

        var strDateTime = [[AddZero(now.getMonth() + 1), AddZero(now.getDate()),  now.getFullYear()].join("/")].join(" ");
        //alert("--"+strDateTime+"--")
        if($("#txtDate").val()<=strDateTime)
        {
            alert("Ngày đi phải lớn hơn thời gian hiện tại");
            return false;
        }
        return true;
    }
</script>
<script src="<?= STATIC_PATH_URL ?>js/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    });
</script>


<script type="text/javascript" src="<?= STATIC_PATH_URL ?>js/image-hover-zoom.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
    .myModal,.modal {
        width: 500px;
    }
    .modal-content {
        width: 500px;
    }
    .modal{background-color: rgba(0, 0, 0, 0.0);
        border: 0 solid rgba(0, 0, 0, 0.0);
        box-shadow: 0 0 0 rgba(0, 0, 0, 0) ;
        bottom: auto;
    }
    .modal-dialog {
        z-index: 1060;
    }
    /* .modal-backdrop{ display: none;}*/
    @media (max-width: 1139px) {

        .modal-content {

         /*   height: 500px;*/
        }
    }
</style>
</body>
</html>