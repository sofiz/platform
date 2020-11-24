<?php
<div class="topbar">



<div class="nav">


<?php
if (isset($_SESSION['Username'])) {

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"></a>


';
echo '<input type="submit" name="logout" value="logout" id="logout" hidden>
<label for="logout" id="logoutbtn" class="fa fa-sign-out" ></label>
';

}

else {    echo '<input type="submit" name="login" value="login"  id="login" hidden>
<label for="login" id="logoutbtn" class="fa fa-sign-in" ></label>';   }
?>

</div>
</div>
?>
