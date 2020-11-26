<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="topbar.css">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php

echo '<div class="topbar">  <div class="nav">';



if (isset($_SESSION['Username'])) {

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"><span class="navbartxt" >profile</span></a>


';
echo '<a href="logout.php" > <label for="logout" id="logoutbtn" class="fa fa-sign-out" ><span class="navbartxt" >signout</span> </label>   </a>
';

}

else {    echo '<a href="signin.php">
<label for="login" id="logoutbtn" class="fa fa-sign-in" ><span class="navbartxt" >signin</span></label></a>  ';   }

echo '<a href="search.php" > <label for="search" id="searchnav" class="fa fa-search" ><span class ="navbartxt">search</span></label>   </a>
';

echo '</div> </div>';
?>
