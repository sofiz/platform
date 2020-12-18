<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="topbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">

    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>



    <title></title>
  </head>
  <body>

  </body>
</html>
<?php

echo '<div class="topbar">  <div class="nav">';



if (isset($_SESSION['Username'])) {

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"><span class="navbartxt" >حسابي</span></a>


';

echo '<a href="search.php"id ="searchnav2" > <label for="search" id="searchnav" class="fa fa-search" ><span class ="navbartxt">البحث</span></label>   </a>
';

echo '<a href="logout.php" id ="logoutbtn2"> <label for="logout" id="logoutbtn" class="fa fa-sign-out" ><span class="navbartxt" >تسجيل الخروج</span> </label>   </a>
';

}

else { echo '<a href="search.php"id ="searchnav2" > <label for="search" id="searchnav" class="fa fa-search" ><span class ="navbartxt">البحث</span></label>   </a>
';
   echo '<a href="signin.php">
<label for="login" id="logoutbtn" class="fa fa-sign-in" ><span class="navbartxt" >تسجيل الدخول</span></label></a>  ';
echo '<a href="signup.php">

<label for="login" id="logoutbtn" class="fa fa-user-plus" ><span class="navbartxt" >إنشاء حساب</span></label></a>  ';   }



echo '</div> </div>';
?>
