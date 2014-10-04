<div class="page single-page" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="post-container" class="col-md-12" role="main">
                <h3 class="short-code-title">Signup</h3>
                <form name="signup" action="" method="post">
                    <table>
                        <tr>
                            <td  align="left">
                                <label>Name : </label>
                            </td>
                            <td align="left">
                                <input type="text" name="firstname" id="firstname" placeholder="First Name" value="<?=set_value('firstname') ?>" class="form-control" /><input type="text" name="lastname" id="lastname"  placeholder="Last Name" value="<?=set_value('lastname') ?>" class="form-control" />
                                <?=error_msg_box(form_error('firstname')) ?> <?=error_msg_box(form_error('lastname')) ?>
                            </td>
                        </tr>
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
                            <td  align="left">
                                <label>Confirm password : </label>
                            </td>
                            <td align="left">
                                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" />
                                <?=error_msg_box(form_error('confirmpassword')) ?>
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
</div>
