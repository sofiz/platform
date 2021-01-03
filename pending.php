<?php 
session_id("session1");
session_start();
if(!isset($_GET['email']))  header('location: search.php');
include('topbar.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="resetpass.css">
</head>
<body>
	<form class="login-form" action="login.php" method="post" style="text-align: center;">
		<p class="msg">
			We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account.
		</p>
	    <p class="msg">Please login into your email account and click on the link we sent to reset your password</p>
			<div class="form-group">
				<a type="url" href="signin.php" class="login-btn">Login</a>
			</div>
	</form>

</body>
</html>
