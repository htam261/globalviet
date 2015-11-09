<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/24/2015
 * Time: 9:02 AM
 */
?>
<div class="col-md-12 regislog">
    <div class="container boder-bottom-1">


        <div class="col-md-12 padding-left-0 padding-top-20" >
            <div class="col-md-7" >
                <h3 class="tieudedanhmuc80 text-uppercase">
                    <font size="4" color="black">Đăng ký thành viên</font>
                </h3>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <?=$b_err['err']?>
                    <?php echo validation_errors(); ?>
                </div>
            </div>
            <?php
            $hidden = array('ajax' => 'true');
            echo form_open("", "class='form-lienhe' data-toggle='validator' role='form'", $hidden); ?>
            <!--end form  12--->
            <div class="col-md-12">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                       value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="col-md-6 padding-top-bottom-10">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                            <span>Họ và tên <label class="color-red">(*)</label>:</span>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $data_name = array(
                            'name' => 'fullname',
                            'class' => 'form-control input-lg require border-radius-0',
                            'placeholder' => '',
                            'id' => 'fullname'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>


                </div>
            </div>
            <div class="col-md-6 padding-top-bottom-10">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                            <span>Email <label class="color-red">(*)</label>:</span>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $data_name = array(
                            'name' => 'Email',
                            'class' => 'form-control input-lg require border-radius-0',
                            'placeholder' => "",
                            'id' => 'Email',
                            'type' => 'email'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-top-bottom-10">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                            <span>Mật khẩu <label class="color-red">(*)</label>:</span>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $data_name = array(
                            'name' => 'password',
                            'class' => 'form-control input-lg require border-radius-0',
                            'placeholder' => "",
                            'id' => 'password'
                        );
                        echo form_password($data_name, '', 'required');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-top-bottom-10">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                            <span>CMND <label class="color-red">(*)</label>:</span>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $data_name = array(
                            'name' => 'numcard',
                            'class' => 'form-control input-lg require border-radius-0',
                            'placeholder' => "",
                            'id' => 'numcard',
                            'maxlength'=>'9'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-top-bottom-10">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                            <span>Điện thoại <label class="color-red">(*)</label>:</span>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $data_name = array(
                            'name' => 'phone',
                            'class' => 'form-control input-lg require border-radius-0',
                            'placeholder' => "",
                            'id' => 'phone'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-top-bottom-10">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                            <span>Địa chỉ <label class="color-red">(*)</label>:</span>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $data_name = array(
                            'name' => 'address',
                            'class' => 'form-control input-lg require border-radius-0',
                            'placeholder' => "",
                            'id' => 'address'
                        );
                        echo form_input($data_name, '', 'required');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-top-bottom-10">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                            <span>&nbsp; <label class="color-red"></label></span>
                        </label>
                    </div>
                    <div class="col-md-8">
                <?php echo form_submit('submit', " Đăng ký ", "class='btn btn-green-full border-radius-0' name='submit'"); ?>
                <span> <b id="usent"></b></span>
                    </div>
                </div>
            </div>

            </div><!--end form  12--->
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {


    });
</script>