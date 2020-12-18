<?php include('app_logic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="resetpass.css">
</head>
<body>
<?php include('topbar.php'); ?>
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
