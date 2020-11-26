<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style_signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">

		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="signup.php" method="post">
				<?php include('errors.php'); ?>
				   <input class="text" type="text" name="Username" placeholder="Username" required="">
                    <input class="text" type="text" name="First_Name" placeholder="First Name" required="">
				    <input class="text" type="text" name="Last_Name" placeholder="Last Name" required="">

					<input class="text email" type="email" name="Email" placeholder="Email" required="">
					<input class="text" type="password" name="Password_1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="Password_2" placeholder="Confirm Password" required="">

					<input class="text" type="text" name="Phone" placeholder="phone" required="">
					<select name="Job">
<option value="00"  > 00 </option>
<option value="01" > 01 </option>
<option value="10" > 10 </option>
<option value="11" > 11 </option>

					</select>
					<select name="Location" >
<option value="00"  >  00</option>
<option value="01" >   01</option>
<option value="10" >   10</option>
<option value="11" >   11</option>

					</select >
					<select name="Type" >
<option value="00"  > worker</option>
<option value="00"  > client</option>

					</select>
					<input type="date" id="birthday" name="Birthday">

					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="SIGNUP"  value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="signin.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>  </p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
