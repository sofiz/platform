<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>تغيير كلمة السر</title>
	<link rel="stylesheet" href="resetpass.css">
</head>

<?php

include('../conn.php') ;
$sSQL= 'SET CHARACTER SET utf8';
mysqli_query($db,$sSQL)
or die ('can\'t charset in DataBase');
include('app_logic.php');
session_start();

if(!isset($_GET['token']))  header('location: search.php');

include('topbar.php');

//----- COUNT NEW PASS VISITs ---------
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
		<h2 class="form-title">تغيير كلمة السر</h2>
		<!-- form validation messages -->
		<?php //include('messages.php'); ?>
		<div class="form-group">
			<label>كلمة سر جديدة</label>
			<input class="input3" type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>تأكيد كلمة السر</label>
			<inputclass="input3" type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">أرسل</button>
		</div>
	</form>

</body>
</html>
