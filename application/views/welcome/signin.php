<div class="page single-page" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <h3>Signin</h3>
            <?=@$error_msg?>
            <form name="signup" action="" method="post">
                <table>
                    <tr>
                        <td  align="left">
                            <label>Email : </label>
                        </td>
                        <td align="left">
                            <input type="text" name="email" id="email" value="<?=set_value('email') ?>" class="form-control"/>
                            <?=error_msg_box(form_error('email')) ?>
                        </td>
                    </tr>
                    <tr>
                        <td  align="left">
                            <label>Password : </label>
                        </td>
                        <td align="left">
                            <input type="password" name="password" id="password" class="form-control"/>
                            <?=error_msg_box(form_error('password')) ?>
                        </td>
                    </tr>
                    <tr>
                        <td  colspan="2" align="center">
                            <input type="submit" name="Submit" value="Submit" class="btn btn-sm btn-default btn-bg">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
