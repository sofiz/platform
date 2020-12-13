<?php include('server.php') ?>
<html>
<head>
<title> Sign in </title>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="style_signup.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>

 </head>
 <body>
 <div class="login-page">
  <div class="form">


  <!--
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
	-->




    <form class="login-form" action="signin.php" method="post" >
	<?php include('errors.php'); ?>
      <input type="text" name="Username" placeholder="username" required="" >
      <input type="password" name="Password"  placeholder="password"  >
      <input type="submit" value="login" name="login">
	  </form>
	  <p><a href="enter_email.php" style="color: #067bba;text-decoration: none;">Forgot your password?</a></p>
      <p class="message">Not registered? <a href="signup.php" >Create an account</a></p>



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
</body>
</html>
