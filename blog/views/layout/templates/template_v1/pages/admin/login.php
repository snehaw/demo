<?php
if(!empty($this->input->cookie("admin_email"))) {
    $remind = "checked";
    $admin_email = $this->input->cookie("admin_email");
}
if(!empty($this->input->cookie("admin_password"))) {
    $admin_password = $this->input->cookie("admin_password"); 
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
                            <span class="error"><?=@$error['admin_email']?></span>
                                <input class="form-control" placeholder="E-mail" name="admin_email" type="email" autofocus value="<?=@$admin_email?>">
                            </div>
                            <div class="form-group">
                            <span class="error"><?=@$error['admin_password']?></span>
                                <input class="form-control" placeholder="Password" name="admin_password" type="password" value="<?=@$admin_password?>">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="1" <?=@$remind?> >Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block" >Login</button>
                           <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>