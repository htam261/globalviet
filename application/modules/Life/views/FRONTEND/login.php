
<div class="col-md-12 regislog">
    <div class="container boder-bottom-1">

        <div class="col-md-12 padding-left-0 padding-top-20" >


<?php
            if( ! isset( $optional_login ) )
            {
            echo "
            <div class='col-md-12' >
                <h3 class='tieudedanhmuc80 text-uppercase'>
                    <font size='4' color='black'>Đăng nhập</font>
                </h3>
            </div>
                ";
            }

            if( ! isset( $on_hold_message ) )
            {
            if( isset( $login_error_mesg ) )
            {
            echo '
            <div>
                <p>
                    Login Error: Invalid Email or Password.
                </p>
                <p>
                    Username, email address and password are all case sensitive.
                </p>
            </div>
            ';
            }

            if( $this->input->get('logout') )
            {
            echo '
            <div>
                <p>
                    You have successfully logged out.
                </p>
            </div>
            ';
            }

            echo form_login_open( base_url('dang-nhap.html'), array( 'class' => 'std-form' ) );
            ?>
            <div class="col-md-12">
            <div class="col-md-12 padding-top-bottom-10">
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label form_label" for="login_string ">
                                <span>Email <label class="color-red">(*)</label>:</span>
                            </label>
                        </div>
                        <div class="col-md-8">
                            <?= form_input('login_string', set_value('login_string'), ' class="form_input input-lg required border-radius-0" autocomplete="off" maxlength="255" style="padding-top: 3px; padding-bottom: 3px; height: 38px;" '); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 padding-top-bottom-10">
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="form_label" for="login_pass" >
                                <span>Mật khẩu <label class="color-red">(*)</label>:</span>
                            </label>
                        </div>
                        <div class="col-md-8">
                            <? $psa=config_item('max_chars_for_password');?>
                            <?= form_password('login_pass', '', ' class="form_input input-lg required password border-radius-0" autocomplete="off" maxlength="$psa" style="padding-top: 3px; padding-bottom: 3px; height: 38px;"'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-7">
                    <div class="form-group">

                <?php
                    if( config_item('allow_remember_me') )
                    {
                        ?>

                        <br />

                        <label for="remember_me" class="form_label">Remember Me</label>
                        <input type="checkbox" id="remember_me" name="remember_me" value="yes" />
                    <?php
                    }
                ?>

                    </div>
                </div>
            </div>
            <div class="col-md-12 padding-top-bottom-10">
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label form_label padding-top-bottom-10" for="login_string ">
                                <span>&nbsp; <label class="color-red"></label></span>
                            </label>
                        </div>
                        <div class="col-md-8">
                            <?= form_submit('submit_button', 'Đăng Nhập', ' class="btn btn-green-full login float-left"'); ?>
                           <a href="<?php base_url() ?>/dang-ky.html"> <input type="button" class=" float-left btn btn-green-full " value=" Đăng Ký "></a>
                        </div>
                    </div>
                </div>
            </div>
                </div><!--end form  12--->
            </form>

            <?php
            }
            else
            {
                // EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
                echo '
			<div style="border:1px solid red;">
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p>
					Please use the ' . secure_anchor('examples/recover','Account Recovery') . ' after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
            }
            ?>

        </div>
    </div>
</div>
<!--
<script src="<? //= STATIC_PATH_URL ?>js/validator.min.js"></script>-->
<!--script src="<?= STATIC_PATH_URL ?>js/jquery.validate.min.js"></script>
-->


<script type="text/javascript">
    $(document).ready(function () {
       /* $.extend(jQuery.validator.messages, {
            required: "",
            email: "Email không hợp lệ",
            equalTo: "Mật Khẩu không khớp",
            remote: jQuery.validator.format("{0} đã sử dụng rồi")
        });
*/

        $(".do-captcha-refresh").on('click', function () {
            $.ajax({
                url: '<?=site_url('captcha') ?>',
                cache: false,
                dataType: "json"
            }).done(function (html) {
                $(".img-captcha").html(html.image);
            });
            $(".captcha").text('');
        });
      /*  $("#login-form").validate(
            {
                rules: {

                    username: {
                        required: true,
                        minlength: 6,
                        maxlength: 12
                    },
                    captcha: {
                        required: true,
                        remote: '<? //= site_url('check-captcha/')?>?t=' + new Date().getMilliseconds()
                    }
                },
                messages: {
                    username: {
                        required: "Bạn chưa nhập tên tài khoản",
                        minlength: jQuery.validator.format("Tài khoản từ 6-12 ký tự"),
                        maxlength: jQuery.validator.format("Tài khoản từ 6-12 ký tự"),
                        remote: jQuery.validator.format("{0} đã được sử dụng")
                    },
                    captcha: {
                        required: "Bạn chưa nhập mã bảo vệ",
                        remote: "Mã xác nhận không đúng"
                    }
                }
            });
*/
    });
</script>