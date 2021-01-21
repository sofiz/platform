<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>تغيير كلمة السر</title>
	<link rel="stylesheet" href="resetpass.css">
</head>

<?php

include('../conn.php') ;
include('app_logic.php');
session_id("session1");
session_start();

if(!isset($_GET['token']))  header('location: search.php');

include('topbar.php');
if (isset($_SESSION['Username'])) {
	  $Username=$_SESSION['Username'];
	  $q ="UPDATE statistics set ResetPass=ResetPass+1 WHERE Username='$Username' ";
	  mysqli_query($db, $q);
}
mysqli_close ( $db );
?>
<body>

<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
	<form class="login-form" action="<?php $actual_link ?>" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<?php //include('messages.php'); ?>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>

</body>
</html>
