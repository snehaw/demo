<?php
?>
<link rel="stylesheet" type="text/css" href="<?php echo  SYSTEM_CSS_DIR; ?>/common/login.css">
<script type="text/javascript" src="<?php echo SYSTEM_JS_DIR; ?>/login.js"></script>
<style type="text/css">
	
</style>
<!-- Modal -->
<div class="modal fade" id="login-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	 <div class="">
        	<div class="row">
            <div class="col-md-6">
              <h3>Sign In</h3>
            <div id="message_msg1"></div>
        			<form id="user-login-form">
        				<div class="form-group">
        					<label for="exampleInputEmail1">Email</label>
                  <div id="user_email_msg1"></div>
						    <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
						    <small id="emailHelp" class="form-text text-muted">Your registered email address.</small>
        				</div>
        				<div class="form-group">
        					<label for="exampleInputEmail1">Password</label>
                  <div id="password_msg1"></div>
						    <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Password">
						    <!-- <small id="passwordHelp" class="form-text text-muted">Your registered email address.</small> -->
        				</div>
        				<div class="form-group">
						    <button type="button" class="btn btn-primary" id="user-login-btn">Login</button>
        				</div>
        			</form>
        		</div>
        		<div class="col-md-6 register">
        			<h3>Sign up</h3>
              <div id="message_msg2"></div>
        			<form id="user-register-form">
        				<div class="form-group">
        					<label for="exampleInputEmail1">Email</label>
                  <div id="user_email_regis_msg2"></div>
						    <input type="email" class="form-control" id="user_email_regis" name="user_email_regis" aria-describedby="emailHelp" placeholder="Enter email">
						    <small id="emailHelp" class="form-text text-muted">Your registered email address.</small>
        				</div>
        				<div class="form-group">
        					<label for="exampleInputEmail1">Password</label>
                  <div id="password_regis_msg2"></div>
						    <input type="password" class="form-control" id="password_regis" name="password_regis" aria-describedby="passwordHelp" placeholder="Password">
						    <!-- <small id="passwordHelp" class="form-text text-muted">Your registered email address.</small> -->
        				</div>
        				<div class="form-group">
        					<label for="exampleInputEmail1">Confirm Password</label>
                  <div id="confirm_password_msg2"></div>
						    <input type="password" class="form-control" id="confirm_password" name="confirm_password" aria-describedby="ConfirmPasswordHelp" placeholder="Confirm Password">
						    <!-- <small id="passwordHelp" class="form-text text-muted">Your registered email address.</small> -->
        				</div>
        				<div class="form-group">
						    <button type="button" class="btn btn-primary" id="user-register-btn" >Register</button>
        				</div>
        			</form>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>