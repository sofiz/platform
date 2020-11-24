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

echo"<a href='search.php'> search  </a> "; 

echo '</div> </div>';
?>
