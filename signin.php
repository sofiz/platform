<?php

include('server.php') ?>
 <?php include('topbar.php'); ?>
<html>
<head>
<title>Rondili -  تسجيل الدخول </title>
<meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي, تسجيل الدخول">
<meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
<meta name="author" content="rondili">
<link href="style_signup.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
<script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
