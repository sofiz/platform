<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="topbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title></title>

    <script type="text/javascript">

    </script>
  </head>
  <body>
<!-- The Modal -->
<div id="myModalpolicy" class="modal">

  <!-- Modal content -->
  <div class="modal-contentp">
    <span class="closepolicy">&times;</span>

		<div class="policycontainer">
<?php include 'policy.html'; ?>
		</div>
  </div>
</div>
<!-- The Modal -->
<div id="myModalreport" class="modal">
  <!-- Modal content -->
  <div class="modal-contentr">
    <span class="closereport">&times;</span>

	<form    action="onsbmit.php" class="defaultform" method="post" >

		<div class="reportcontainer">
      <span class="fas fa-user" style="font-family: FontAwesome;color: black;font-size:20px; display:inline ;vertical-align: sub;"></span>
<input type="text" name="Name" value="" class="input" placeholder="الإسم" style="margin-top:30px;margin-bottom:10px;height:25px;display:inline;width:50%"><br>
<span class="fas fa-envelope" style="font-family: FontAwesome;color: black;font-size:20px;display:inline;vertical-align: sub;"></span>
<input type="text" name="Email" value="" class="input" placeholder="الايمايل" style="display: inline;margin-bottom:10px;height:25px;width:50%">
<textarea name="Report" id="textarea" placeholder="إشرح ماتريد قوله" style="resize: none;"></textarea>
<button type="submit" name="sendreport" class="btnstyle" id="sendreport">أرسل</button>


		</div>

		</form>

  </div>


</div>


<?php


echo '<div id="sidebar" class="sidebar">
<a href="index.php"  >
<img src="LOGO_back_white2.png" class="logo" alt="">
<p class="logo_txt">Rondili</p>
</a>

 <div class="nav">';



if (isset($_SESSION['Username'])) {

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"><span class="navbartxt" >حسابي</span></a>


';


echo  '<a href="posts.php" id="my-profilebtn" class="fa fa-briefcase"><span class="navbartxt" >فرص عمل</span></a>


';

echo '<a href="search.php"id ="searchnav2" > <label for="search" id="searchnav" class="fa fa-search" ><span class ="navbartxt">بحث</span></label>   </a>
';

echo '<a href="logout.php" id ="logoutbtn2"> <label for="logout" id="logoutbtn" class="fa fa-sign-out" ><span class="navbartxt" >خروج</span> </label>   </a>
';

}

else {
 echo  '<a href="posts.php" id="my-profilebtn" class="fa fa-briefcase"><span class="navbartxt" >فرص عمل</span></a>


  ';

   echo '
  <a href="search.php"  id="searchnav2" > <label for="search" id="searchnav" class="fa fa-search" ><span class ="navbartxt">بحث</span></label>   </a>
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

<div class="topbar">
  <div class="hum"  onclick="showsidebar()">
    <i class="fa fa-bars" aria-hidden="true" style="    font-size: 50px;
    color: white;"></i>
  </div>

</div>
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
var x = document.getElementById("sidebar");
var c=0;
function showsidebar() {
  if (c==0){
    console.log("none to block");
    x.style.display = "block";
    c=1;
  }
  else {
    if (x.style.display == "none") {
      console.log("none to block");
      x.style.display = "block";
    } else {
      console.log("block to none");
      x.style.display = "none";
    }
  }

}
</script>
</body>
</html>
