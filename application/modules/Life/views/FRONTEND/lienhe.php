<?php
if (isset($_POST['submit']) == true) {
   // var_dump("submit");
   // exit();
}
?>
<div class="col-md-12 regislog">
    <div class="container boder-bottom-1">

        <div class="col-md-12" >
            <h3 class="tieudedanhmuc80 text-uppercase">
                <font size="4" color="black">Liên hệ với chúng tôi</font>
            </h3>
            <div class="col-md-12" style="background-color: #ffffff;">
                <div class="col-md-3 padding10">
                    <?= stripslashes($info->content) ?>
                  <!--  <p class="icon-address">
                        <b> 15 Đào Duy Anh, Phường 9,<br/>
                            Q. Phú Nhuận, TP. HCM
                        </b>
                    </p>
                    <p class="icon-phone margin-top-25">
                        <b> (+84) 866 755 714
                            <br/>
                            (+84) 908 517 869
                        </b>
                    </p>
                    <p class="icon-mail margin-top-25">
                        <b> carrental@globalviet.vn
                        </b>
                    </p>
                    <p class="icon-skype margin-top-25">
                        <b> globalviettravel
                        </b>
                    </p>
                    <p class="icon-viber margin-top-25">
                        <b> globalviettravel
                        </b>
                    </p>
                    <p class="icon-zalo margin-top-25">
                        <b> globalviettravel
                        </b>
                    </p>
                    -->
                </div>
                <div class="col-md-9 padding10 padding-right-0">
                    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
                    <script>
                        <?=$point->summary?>
/*
                         function initialize() {
                         var mapOptions = {
                         zoom: 4,
                         center: new google.maps.LatLng(10.797165, 106.686712)
                         };
                         var map = new google.maps.Map(document.getElementById('map-canvas'),
                         mapOptions);
                         var A =[];
                         A[0]=new google.maps.LatLng(10.797165, 106.686712);
                         A[1]=new google.maps.LatLng(10.791252, 106.644521);
                         A[2]=new google.maps.LatLng(10.795447, 106.682244);
                         var N= A.length;

                         var southWest = new google.maps.LatLng(10.733463, 106.619950);//toa do phia nam thap nhat trong khung
                         var northEast = new google.maps.LatLng(11.076108, 106.786038);//toa đô phia bac cao nhat trong khung
                         var bounds = new google.maps.LatLngBounds(southWest, northEast);
                         map.fitBounds(bounds);
                         for (var i = 0; i <=N; i++) {//alert(A[i].lng());
                         var lngSpan = A[i].lng();
                         var latSpan = A[i].lat();
                         var position = new google.maps.LatLng(latSpan,lngSpan);
                         var marker = new google.maps.Marker({
                         position: position,
                         map: map
                         });
                         marker.setTitle((i + 1).toString());
                         attachSecretMessage(marker, i);
                         }
                         }
                         function attachSecretMessage(marker, num) {
                         //['This', 'is', 'the', 'secret', 'message'];
                         var message=[] ;
                         message[0]="This";
                         message[1]="is";
                         message[2]="the";
                         message[3]="secret";
                         message[4]="message";
                         var infowindow = new google.maps.InfoWindow({
                         content: message[num]
                         });
                         google.maps.event.addListener(marker, 'click', function() {
                         //alert(num);
                         infowindow.open(marker.get('map'), marker);
                         });
                         }
                         google.maps.event.addDomListener(window, 'load', initialize);
*/
                    </script>
                    <div id="map-canvas"></div>
                   <!-- <img src="<?= STATIC_PATH_URL ?>images/bando.jpg"/>
                   -->
                </div>
            </div>

        </div>
        <div class="col-md-12 padding-left-0 padding-top-20" >
            <div class="col-md-12" >
                <h3 class="tieudedanhmuc80 text-uppercase">
                    <font size="4" color="black">Thông tin khách hàng</font>
                </h3>
            </div>
            <?php
            $hidden = array('ajax' => 'true');
            echo form_open("", "class='form-lienhe' data-toggle='validator' role='form'", $hidden); ?>
            <div class="col-md-4">
                <div class="form-group">
                    <?php
                    $data_name = array(
                        'name' => 'Name',
                        'class' => 'form-control input-lg require',
                        'placeholder' => 'Name',
                        'id' => 'Name'
                    );
                    echo form_input($data_name, '', 'required');
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <?php
                    $data_name = array(
                        'name' => 'Email',
                        'class' => 'form-control input-lg require',
                        'placeholder' => "Email",
                        'id' => 'Email',
                        'type' => 'email'
                    );
                    echo form_input($data_name, '', 'required');
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <?php
                    $data_name = array(
                        'name' => 'Phone',
                        'class' => 'form-control input-lg require',
                        'placeholder' => "Điện thoại",
                        'id' => 'Phone'
                    );
                    echo form_input($data_name, '', 'required');
                    ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?php
                    $data_name = array(
                        'name' => 'EmailMsg',
                        'class' => 'form-control',
                        'placeholder' => "Message",
                        'id' => 'EmailMsg',
                    );
                    echo form_textarea($data_name, '', 'required');
                    ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo form_submit('submit', " Gửi tin nhắn ", "class='btn btn-green-full opacity-0' name='submit'"); ?>
                    <span> <b id="usent"></b></span>
                </div>
            </div>
            <script src="<?= STATIC_PATH_URL ?>js/validator.min.js"></script>
            <script type="text/javascript">

                jQuery(document).ready(function ($) {
                    $('.form-lienhe').validator().on('submit', function (e) {
                        if (e.isDefaultPrevented()) {
                            // handle the invalid form...
                        } else {
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('mail/sentmail'); ?>",
                                dataType: 'json',
                                data: $('.form-lienhe').serialize(),
                                success: function (ret) {
                                    document.getElementById("usent").innerHTML = ret['message'];
                                    if(ret['ret'])
                                    {
                                        alert("Gửi liên hệ thành công");
                                        // window.location.href = '<?php echo site_url("lien-he.html"); ?> ';
                                    }
                                    else{
                                        alert("Có lỗi xảy ra");
                                    }
                                    //  alert(ret['']);
                                    //  window.location.href = '<?php echo site_url('lien-he.html'); ?>#popup-messager'
                                }
                            });
                        }
                        return false;
                    })
                });

            </script>
            <!--
            <form class="form-signin" role="form">
                <div class="col-md-4" >
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Tên" label="Text"/>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email" label="Text"/>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Điện thoại" label="Text"/>
                    </div>
                </div>
                <div class="col-md-12" >
                    <div class="form-group">
                        <textarea class="form-control" rows="12" placeholder="Tin nhắn" label="Text Area" type="textarea"></textarea>
                    </div>
                </div>
                <div class="col-md-12" >
                    <div class="form-group">
                        <input type="button" class="btn btn-green-full " value="&nbsp; Gửi tin nhắn &nbsp;">
                    </div>
                </div>
            </form>
            -->
        </div>
    </div>
</div>