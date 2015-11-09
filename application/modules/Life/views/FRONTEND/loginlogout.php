<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/29/2015
 * Time: 10:29 PM
 */
?>

<?php
$url=base_url();
$thoat="<a href='".$url."thoat.html'> LOGOUT</a>";

  if($checkcool['zdata'])
  {
      ?>
      <li class="">
     <? echo "Hello ".$checkcool['auth_user_name']." | ".$thoat." |";?>
      </li>
      <?
  }else{
?>

      <?php if($this->session->userdata('site_lang')!='en'){?>
      <li class="">
          <a href="<?php base_url() ?>/dang-nhap.html">ĐĂNG NHẬP |</a>
      </li>
      <li class="">
          <a href="<?php base_url() ?>/dang-ky.html">ĐĂNG KÝ |</a>
      </li>
      <?php }
      else{?>
          <li class="">
              <a href="<?php base_url() ?>/dang-nhap.html">SIGN IN |</a>
          </li>
          <li class="">
              <a href="<?php base_url() ?>/dang-ky.html">REGISTER |</a>
          </li>
      <? }?>
<?  }?>