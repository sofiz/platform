<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rondili - تغيير كلمة السر</title>
	<link rel="stylesheet" href="resetpass.css">
	<script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<?php
include('../conn.php') ;
include('app_logic.php');
session_id("session1");
session_start();
include('topbar.php');
if (isset($_SESSION['Username'])) {
	  $Username=$_SESSION['Username'];
	  $q ="UPDATE statistics set EnterEmail=EnterEmail+1 WHERE Username='$Username' ";
	  mysqli_query($db, $q);
}
mysqli_close ( $db );
?>
<body>
	<form class="login-form" action="enter_email.php" method="post">

		<h2 class="form-title">Reset Password</h2>
		<!-- form validation messages -->
		<?php //include('messages.php'); ?>
		<div class="form-group">
			<input id="input3" placeholder="Enter your Email " type="email" name="email">
		</div>
		<div class="form-group">
			<button type="submit" name="reset-password" class="login-btn">Submit</button>
		</div>
	</form>
</body>

</html>
