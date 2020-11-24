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

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"></a>


';
echo '<a href="logout.php" > <label for="logout" id="logoutbtn" class="fa fa-sign-out" >  </label>  </a>
';

}

else {    echo '<a href="signin.php">
<label for="login" id="logoutbtn" class="fa fa-sign-in" ></label> </a>  ';   }

echo"<a href='search.php' id='searchnav'> search  </a> ";

echo '</div> </div>';
?>
