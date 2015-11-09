<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 7/29/2015
 * Time: 11:20 AM
 */
?>
<? $urlb=base_url();?>
<form action="<?=$urlb?>booking"  method="post" role='form'>

    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
           value="<?php echo $this->security->get_csrf_hash(); ?>">

    <div class="col-md-12 bacground-booking height120 padding-left-right-0">
        <div class="col-md-12 text-center bookinghead">
            <font size="3"><? _T("BOOKING")?></font>
        </div>
        <div class="col-md-12 div-reponsive-fload-left">
            <div class="col-md-2 padding-right-0 formbookinginput">
                <p class="magin-0 "><? _T("I’D LIKE TO BOOK")?></p>
                <div class="btn-group">
                    <select data-placeholder='<? _T("Choose a car")?>' name="Type" class="chosen-select width175 text-alignleft" tabindex="2" onchange="changetype(this.value)">
                        <option value=""></option>
                        <? $items = $typecar["list_article"]; $i=1;//var_dump($items);exit();
                        if($items){
                            foreach ($items as $item): ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                                <?php $i++; ?>
                            <? endforeach; }?>
                    </select>
                    <!-- <button class="btn btn-default dropdown-toggle width175 text-alignleft"
                        data-toggle="dropdown">Type car <span data-label-placement="">Chevrolet</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <? $items = $typecar["list_article"]; $i=1;//var_dump($items);exit();
                    if($items){
                        foreach ($items as $item): ?>
                            <li>
                                <input type="radio" <? if($i==1) echo "checked=''"?>
                                       value="<?=$item->id?>"
                                       name="Type" id="Type_<?=$i?>" onchange="changetype(this.value)">
                                <label for="Type_<?=$i?>"><?=$item->name?></label>
                            </li>
                            <?php $i++; ?>
                        <? endforeach; }?>

                </ul>-->
                </div>
            </div>
            <div class="col-md-2 padding-right-0 formbookinginput div-reponsive-fload-left">
                <p class="magin-0 "><? _T("FROM")?></p>
                <div class="btn-group">
                    <select data-placeholder='<? _T("Choose an to point")?>' name="from" class="chosen-select width175 text-alignleft" tabindex="2"
                            onchange="changefrom(this.value)">
                        <option value=""></option>
                        <? $items = $province["list_article"]; $i=1;//var_dump($items);exit();
                        if($items){
                            foreach ($items as $item): ?>
                                <option value="<?=$item->provinceid?>"><?=$item->name?></option>
                                <?php $i++; ?>
                            <? endforeach; }?>
                    </select>
                    <!-- <button class="btn btn-default dropdown-toggle width175 text-alignleft"
                        data-toggle="dropdown">City <span data-label-placement="" >Hồ Chí Minh</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <? $items = $province["list_article"]; $i=1;//var_dump($items);exit();
                    if($items){
                        foreach ($items as $item): ?>
                            <li>
                                <input type="radio" <? if($i==1) echo "checked=''"?>
                                       value="<?=$item->provinceid?>"
                                       name="from" id="from_<?=$i?>" onchange="changefrom(this.value)">
                                <label for="from_<?=$i?>"><?=$item->name?></label>
                            </li>
                            <?php $i++; ?>
                       <? endforeach; }?>


                </ul>-->
                </div>
            </div>
            <div class="col-md-2 padding-right-0 formbookinginput div-reponsive-fload-left">
                <p class="magin-0 "><? _T("TO")?></p>
                <div class="btn-group">

                    <select data-placeholder='<? _T("Choose an end point")?>' name="To" class="chosen-select width175 text-alignleft" tabindex="2"
                            onchange="changeTo(this.value)">
                        <option value=""></option>
                        <? $items = $province["list_article"]; $i=1;//var_dump($items);exit();
                        if($items){
                            foreach ($items as $item): ?>
                                <option value="<?=$item->provinceid?>"><?=$item->name?></option>
                                <?php $i++; ?>
                            <? endforeach; }?>
                    </select>
                    <!--
                    <button class="btn btn-default dropdown-toggle width175 text-alignleft"
                        data-toggle="dropdown"><span data-label-placement="" style="float: left;">.......</span>
                    <span class="caret" style="float: right; margin-top: 8px;"></span>
                </button>
                <ul class="dropdown-menu">
                    <? $items = $province["list_article"]; $i=1;//var_dump($items);exit();
                    if($items){
                        foreach ($items as $item): ?>
                            <li>
                                <input type="radio" <? if($i==1) echo "checked=''"?>
                                       value="<?=$item->provinceid?>"
                                       name="To" id="To_<?=$i?>" onchange="changeTo(this.value)">
                                <label for="To_<?=$i?>"><?=$item->name?></label>
                            </li>
                            <?php $i++; ?>
                        <? endforeach; }?>
                    </ul>
-->


                </div>
            </div>
            <div class="col-md-2 padding-right-0 formbookinginput div-reponsive-fload-left">
                <p class="magin-0 "><? _T("ON");?></p>
                <div class="input-group date">
                    <input type="text" class="form-control" name="date" style="height: 34px;" onblur="changedate(this.value)"/>
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th"></i>
                            </span>
                </div>

            </div>
            <div class="col-md-2 padding-right-0 formbookinginput width-reponsive-100 div-reponsive-fload-left">
                <p class="magin-0 "><? _T("CODE");?></p>
                <div class="input-group">
                    <input type="text" name="code" disabled class="form-control" style="height: 34px;" onblur="changecode(this.value)"
                           placeholder="Code" aria-describedby="basic-addon1" value="<? if($typecode) echo $typecode?>">
                </div>
            </div>
            <div class="col-md-2 padding-right-0 formbookinginput width-reponsive-120 div-reponsive-fload-left" style="padding-top: 14px;">
                <img src="<?= STATIC_PATH_URL ?>images/next.png" width="35" height="40"/>
                    <span id="btnsent">
                        <a class="btn btn-boton-note" href="#" role="button">
                            SEND
                        </a>
                    </span>
                <input type="submit" name="submit" value="submit" id="btnsubmit" style="display: none;"/>
            </div>

        </div>
    </div>
    <input type="hidden" id="txtType" class="reform" name="txtType" value=""/>
    <input type="hidden" id="txtFrom" class="reform" name="txtFrom" value=""/>
    <input type="hidden" id="txtTo" class="reform" name="txtTo" value=""/>
    <input type="hidden" id="txtDate" class="reform" name="txtDate" value=""/>
    <input type="hidden" id="txtCode" class="" name="txtCode" value="<? if($typecode) echo $typecode?>"/>
    <input type="hidden" id="txtphone" class="" name="txtphone" value=""/>
    <input type="hidden" id="txtemail" class="" name="txtemail" value=""/>
    <input type="hidden" id="txtcapcha" class="" name="txtcapcha" value=""/>
    <input type="hidden" id="txtauthoruser" class="" name="txtauthoruser" value="<?=$b_author['author']?>"/>


    <!-----modal-->

    <script src="<?= STATIC_PATH_URL ?>js/bootbox.min.js"></script>
    <button type="button" class="btn btn-primary" data-toggle="modal" style="display: none;" id="btnmodaladd"
            data-target="#loadbookingadd">Open modal for @mdo</button>


    <div class="modal fade" id="loadbookingadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content formshow">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Thông tin Thêm</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Phone:</label>
                        <input type="text" class="form-control" id="recipient-phone" onblur="changephone(this.value)" style="height: 36px;">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <?php /*
                        $data_name = array(
                            'name' => 'recipientemail',
                            'class' => 'form-control',
                            'placeholder' => "",
                            'id' => 'recipientemail',
                            'onblur'=>'changeemail(this.value)',
                            'style'=>'height: 36px;'

                        );
                        echo form_input($data_name, '', '');*/
                        ?>

                        <input type="text" class="form-control" id=" recipientemail" onblur="changeemail(this.value)" style="height: 36px;">

                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nhập mã : <?=$captcha?></label>

                        <input type="text" class="form-control" id="recipientcapcha" onblur="changecapcha(this.value)" style="height: 36px;">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-clear">Close</button>
                    <button type="button" class="btn btn-primary" id="btnok">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        /*$('#loadbookingadd').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget)
         var recipient = button.data('whatever')
         var modal = $(this)
         modal.find('.modal-title').text('New message to ' + recipient)
         modal.find('.modal-body input').val(recipient)
         })*/
    </script>




    <!--end modal----->
</form>



<script type="text/javascript">

    function changetype(u){
        $("#txtType").val(u);
    }
    function changefrom(u){
        $("#txtFrom").val(u);
    }
    function changeTo(u){
        $("#txtTo").val(u);
    }
    function changedate(u){
        $("#txtDate").val(u);
    }
    function changecode(u){
        $("#txtCode").val(u);
    }
    function AddZero(num) {
        return (num >= 0 && num < 10) ? "0" + num : num + "";
    }

    /*************thong tin them************/
    function changephone(u){
        $("#txtphone").val(u);
    }
    function changeemail(u){
        $("#txtemail").val(u);
    }
    function changecapcha(u){
        $("#txtcapcha").val(u);
    }
    /*  function changeemail(u){
     $("#txtauthoruser").val(3);
     }*/
    /*************end thong tin them************/
</script>