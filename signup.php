<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
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
		<h1>SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="signup.php" method="post">
				<?php include('errors.php'); ?>
				   <input class="text" type="text" name="username" placeholder="Username" required="">
                    <input class="text" type="text" name="fname" placeholder="First Name" required="">
				    <input class="text" type="text" name="lname" placeholder="Last Name" required="">
					
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password_1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password_2" placeholder="Confirm Password" required="">
					
					<input class="text" type="text" name="phone" placeholder="phone" required="">
					<select name="work">
<option value="00"  >  se 00</option>
<option value="01" >  se 01</option>
<option value="10" >  se 10</option>
<option value="11" >  se 11</option>

					</select>
					<select name="position" >
<option value="00"  > po 00</option>
<option value="01" >  po 01</option>
<option value="10" >  po 10</option>
<option value="11" >  po 11</option>

					</select>
					<select  >
<option value="00"  > worker</option>
<option value="00"  > client</option>

					</select>
					<input type="date" id="birthday" name="birthday">
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="SIGNUP"  value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>� 2020 riyadh Signup Form All rights reserved | developed  by riyadh</p>
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