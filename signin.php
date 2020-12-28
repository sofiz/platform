<?php

include('server.php') ?>
 <?php include('topbar.php'); ?>
<html>
<head>
<title> تسجيل الدخول </title>
<link href="style_signup.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />


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
      <input type="text" name="Username" placeholder="إسم المستخدم" required="" >
      <input type="password" name="Password"  placeholder="كلمة السر"  >
      <input type="submit" value="دخول" name="login">
	  </form>
	  <p><a href="enter_email.php" style="color: #067bba;text-decoration: none;">نسيت كلمة السر؟ </a></p>
      <p class="message"> أنت غير مسجل؟ <a href="signup.php" >إنشاء حساب</a></p>



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
