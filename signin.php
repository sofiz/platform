<?php include('server.php') ?>
<html> 
<head>

<link href="style.css" rel="stylesheet" type="text/css" media="all" />

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
	  <p><a href="enter_email.php">Forgot your password?</a></p>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
    
	
	
  </div>
</div>
</body>
</html> 
