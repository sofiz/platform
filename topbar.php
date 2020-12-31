
<?php

if (isset($_POST['sendreport'])) {


include('../conn.php') ;
$Email = mysqli_real_escape_string($db, $_POST['Email']);
$Name = mysqli_real_escape_string($db, $_POST['Name']);
$Report = mysqli_real_escape_string($db, $_POST['Report']);


$query = "INSERT INTO reports (Name,Email,Report)
  			  VALUES('$Name','$Email','$Report')";

  	mysqli_query($db, $query);

	mysqli_close ( $db );

}


?>



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



<!-- The Modal -->
<div id="myModalpolicy" class="modal">

  <!-- Modal content -->
  <div class="modal-contentp">
    <span class="closepolicy">&times;</span>

		<div class="policycontainer">
<?php include 'policy.html';




?>
		</div>

  </div>


</div>


<!-- The Modal -->
<div id="myModalreport" class="modal">

  <!-- Modal content -->
  <div class="modal-contentr">
    <span class="closereport">&times;</span>

	<form    action="" class="defaultform" method="post" >

		<div class="reportcontainer">
      <span class="fas fa-user" style="font-family: FontAwesome;color: black;font-size:20px; display:inline ;vertical-align: sub;"></span>
<input type="text" name="Name" value="" class="input" placeholder="الإسم" style="margin-top:30px;margin-bottom:10px;height:25px;display:inline"><br>
<span class="fas fa-envelope" style="font-family: FontAwesome;color: black;font-size:20px;display:inline;vertical-align: sub;"></span>
<input type="text" name="Email" value="" class="input" placeholder="الايمايل" style="display: inline;margin-bottom:10px;height:25px;">
<textarea name="Report" rows="8" cols="80" placeholder="إشرح ماتريد قوله" style="resize: none;"></textarea>
<button type="submit" name="sendreport" class="btnstyle" id="sendreport">أرسل</button>


		</div>

		</form>

  </div>


</div>

</html>
<?php

/* <?php
// function to get webpage title
function getTitle($url) {
    $page = file_get_contents($url);
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
    return $title;
}
// get web page title
echo 'Title: ' . getTitle('http://www.w3schools.com/php/');

// Output:
// Title: PHP 5 Tutorial
?> */

echo '<div class="topbar">

<img src="LOGO_back_white2.png" class="logo" alt="">
<p class="logo_txt">Rondili</p>


 <div class="nav">';



if (isset($_SESSION['Username'])) {

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"><span class="navbartxt" >حسابي</span></a>


';

echo '<a href="search.php"id ="searchnav2" > <label for="search" id="searchnav" class="fa fa-search" ><span class ="navbartxt">بحث</span></label>   </a>
';

echo '<a href="logout.php" id ="logoutbtn2"> <label for="logout" id="logoutbtn" class="fa fa-sign-out" ><span class="navbartxt" >خروج</span> </label>   </a>
';

}

else { echo '<a href="search.php"  id="searchnav2" > <label for="search" id="searchnav" class="fa fa-search" ><span class ="navbartxt">بحث</span></label>   </a>
';
   echo '<a href="signin.php">
<label for="login" id="logoutbtn" class="fa fa-sign-in" ><span class="navbartxt" >دخول</span></label></a>  ';
echo '<a href="signup.php">

<label for="login" id="logoutbtn" class="fa fa-user-plus" ><span class="navbartxt" >تسجيل</span></label></a>  ';   }



echo '</div>

<div class="foot">
  <div class="report" id="report">
    <span class="fas fa-bullhorn" style="font-family: FontAwesome;color: white;font-size:20px;"></span>
  <p class="foottxt">  تواصل و إبلاغ</p>
  </div>
  <div class="policy" id="policy">
  <span class="fas fa-handshake-o" style="font-family: FontAwesome;color: white;font-size:20px;"></span>
<p class="foottxt"> سياسة الخصوصية</p>
  </div>
</div>

 </div>';

?>
<script type="text/javascript">
// Get the modal
var modal5 = document.getElementById("myModalpolicy");

// Get the button that opens the modal
var btn5 = document.getElementById("policy");

// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("closepolicy")[0];

// When the user clicks the button, open the modal
btn5.onclick = function() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
  modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";

  }
}

// Get the modal
var modal6 = document.getElementById("myModalreport");

// Get the button that opens the modal
var btn6 = document.getElementById("report");

// Get the <span> element that closes the modal
var span6 = document.getElementsByClassName("closereport")[0];

// When the user clicks the button, open the modal
btn6.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span6.onclick = function() {
  modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";

  }
}
</script>
