<div class="container">

    <div class="block">
        <h2 class="title-block"><span>LIÊN HỆ</span></h2>

        <div class="row">

            <div class="col-md-6 box-address">
                <p class="desc-form"><?= $result->content ?></p>
                <?php
                $hidden = array('ajax' => 'true');
                echo form_open("", "class='form-lienhe' data-toggle='validator' role='form'", $hidden); ?>
                <div class="form-group row">
                    <div class="col-md-6">
                        <?php
                        $data_name = array(
                            'name' => 'Name',
                            'class' => 'form-control',
                            'placeholder' => lang("Name"),
                            'id' => 'Name'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>
                    <div class="col-md-6">

                        <?php
                        $data_name = array(
                            'name' => 'Email',
                            'class' => 'form-control',
                            'placeholder' => lang("Email"),
                            'id' => 'Email',
                            'type' => 'email'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <?php
                        $data_name = array(
                            'name' => 'Phone',
                            'class' => 'form-control',
                            'placeholder' => lang("Phone"),
                            'id' => 'Phone'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>

                    <div class="col-md-6">

                        <?php
                        $data_name = array(
                            'name' => 'Birthday',
                            'class' => 'form-control',
                            'placeholder' => lang("Birthday"),
                            'id' => 'EmailMsg',
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php
                    $data_name = array(
                        'name' => 'EmailMsg',
                        'class' => 'form-control',
                        'placeholder' => lang("Message"),
                        'id' => 'EmailMsg',
                    );
                    echo form_textarea($data_name, '', 'required');
                    ?>
                </div>
                <div class="text-center">
                    <?php echo form_submit('submit', lang('Send'), "class='btn btn-default btn-more opacity-0'"); ?>
                </div>
                <?php
                // Form Close
                echo form_close(); ?>


                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.form-lienhe').validator().on('submit', function (e) {
                            if (e.isDefaultPrevented()) {
                                // handle the invalid form...
                            } else {
                                jQuery.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url('life/sendemail'); ?>",
                                    dataType: 'json',
                                    data: $('.form-enrol').serialize(),
                                    success: function (res) {
                                        alert(res);
                                    }
                                });
                            }
                            return false;
                        })
                    });


                </script>
                <!-- .col-md-6 --></div>
            <div class="col-md-6 box-address">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title-address">ĐỊA CHỈ</h4>

                        <p><?= modules::run('life/getSetting', 'address') ?></p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="title-address">LIÊN HỆ</h4>

                        <p>T: <?= modules::run('life/getSetting', 'phone') ?></p>

                        <p>E: <?= modules::run('life/getSetting', 'email') ?></p>
                    </div>
                </div>
                <div class="img-responsive">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div style="overflow:hidden;height:263px;width:555px;">
                        <div id="gmap_canvas" style="height:320px;width:870px;"></div>
                        <style>#gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }</style>
                        <a class="google-map-code" href="http://premium-wordpress-themes.org" id="get-map-data">wordpress-specific
                            category</a></div>
                    <script type="text/javascript"> function init_map() {
                            var myOptions = {
                                zoom: 16,
                                center: new google.maps.LatLng(<?= modules::run('life/getSetting', 'mapx') ?>, <?= modules::run('life/getSetting', 'mapy') ?>),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(<?= modules::run('life/getSetting', 'mapx') ?>, <?= modules::run('life/getSetting', 'mapy') ?>)
                            });
                            infowindow = new google.maps.InfoWindow({content: "<?= modules::run('life/getSetting', 'address') ?>"});
                            google.maps.event.addListener(marker, "click", function () {
                                infowindow.open(map, marker);
                            });
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
                <!--                <img class="img-responsive" src="assets/images/pic_maps.png" alt="maps dtp"/>-->
                <!-- .col-md-6 --></div>

            <!-- .row --></div>
        <!-- .block --></div>

    <!-- .container --></div>
<!-- .main-content -->