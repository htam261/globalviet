<script type="text/javascript" src="<?= PATH_URL . 'static/js/admin/jquery.slugit.js' ?>"></script>
<script type="text/javascript">
    function save() {
        var options = {
            beforeSubmit: showRequest,  // pre-submit callback
            success: showResponse  // post-submit callback
        };
        $input = $('<input type="hidden" name="token"/>').val(csrf_value);
        $('#frmManagement').append($input);
        $('#frmManagement').ajaxSubmit(options);
    }

    function showRequest(formData, jqForm, options) {
        var form = jqForm[0];
        if (form.nameAdmincp.value == '') {
            $('#txt_error').html('Please enter information!!!');
            $('#loader').fadeOut(300);
            show_perm_denied();
            return false;
        }
    }

    function showResponse(responseText, statusText, xhr, $form) {
        if (responseText == 'success') {
            location.href = root + "admincp/" + module + "/#/save";
        }

        if (responseText == 'error-title-exists') {
            $('#txt_error').html('Title already exists!!!');
            $('#loader').fadeOut(300);
            show_perm_denied();
            $('#titleAdmincp').focus();
            return false;
        }

        if (responseText == 'error-alias-exists') {
            $('#txt_error').html('Slug already exists!!!');
            $('#loader').fadeOut(300);
            show_perm_denied();
            $('#aliasAdmincp').focus();
            return false;
        }

        if (responseText == 'permission-denied') {
            show_perm_denied();
        }
    }
</script>
<div class="gr_perm_error" style="display:none;">
    <p><strong>FAILURE: </strong><span id="txt_error">Permission Denied.</span></p>
</div>
<div class="table">
    <div class="head_table">
        <div class="head_title_edit"><?= $module ?></div>
    </div>
    <div class="clearAll"></div>

    <form id="frmManagement" action="<?= PATH_URL . 'admincp/' . $module . '/positionsave' ?>" method="post"
          enctype="multipart/form-data">
        <input type="hidden" value="<?= $id ?>" name="hiddenIdAdmincp"/>

        <div class="row_text_field">
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td class="left_text_field">Name:</td>
                    <td class="right_text_field"><input value="<?php if (isset($result->code)) {
                            print $result->code;
                        } else {
                            print '';
                        } ?>" type="text" name="nameAdmincp" id="nameAdmincp"/></td>
                </tr>
            </table>
        </div>

        <div class="row_text_field">
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td class="left_text_field">Code:</td>
                    <td class="right_text_field"><input value="<?php if (isset($result->code)) {
                            print $result->code;
                        } else {
                            print '';
                        } ?>" type="text" name="codeAdmincp" id="codeAdmincp"/></td>
                </tr>
            </table>
        </div>
        <div class="row_text_field">
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td class="left_text_field">Width:</td>
                    <td class="right_text_field"><input value="<?php if (isset($result->width)) {
                            print $result->width;
                        } else {
                            print '';
                        } ?>" type="text" name="widthAdmincp" id="widthAdmincp"/></td>
                </tr>
            </table>
        </div>
        <div class="row_text_field">
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td class="left_text_field">Height:</td>
                    <td class="right_text_field"><input value="<?php if (isset($result->height)) {
                            print $result->height;
                        } else {
                            print '';
                        } ?>" type="text" name="heightAdmincp" id="heightAdmincp"/></td>
                </tr>
            </table>
        </div>


    </form>
</div>