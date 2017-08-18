<?php
/*session_start();
if(!empty($_POST["login"])) {
	$conn = mysqli_connect("localhost", "root", "", "blog_samples");
	$sql = "Select * from members where member_name = '" . $_POST["member_name"] . "' and member_password = '" . md5($_POST["member_password"]) . "'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["member_id"]		   = $user["member_id"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("member_login",$_POST["member_name"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("member_password",$_POST["member_password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
				if(isset($_COOKIE["member_password"])) {
					setcookie ("member_password","");
				}
			}
	} else {
		$message = "Invalid Login";
	}
}*/
?>
<form action="" method="post" id="frmLogin" class="hide">
	<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>	
	<div class="field-group">
		<div><label for="login">Username</label></div>
		<div><input name="member_name" type="text" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" class="input-field">
	</div>
	<div class="field-group">
		<div><label for="password">Password</label></div>
		<div><input name="member_password" type="password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" class="input-field"> 
	</div>
	<div class="field-group">
		<div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
		<label for="remember-me">Remember me</label>
	</div>
	<div class="field-group">
		<div><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
	</div>       
</form>
<div class="pm-button" class="hide">
  <a href="https://www.payumoney.com/paybypayumoney/#/983ABFBEBB7D5457A93E87CB4CA9211B">
    <img src="https://www.payumoney.com/media/images/payby_payumoney/new_buttons/22.png" />
  </a>
</div>
</body>
</html>