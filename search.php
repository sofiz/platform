<?php
include('../conn.php');

$sSQL= 'SET CHARACTER SET utf8';
mysqli_query($db,$sSQL)
or die ('can\'t charset in DataBase');
//-------------ALL---------------

if (!isset($_COOKIE['page_visited_already'])){
$sql0="UPDATE visitors SET Allvisitors=Allvisitors+1 where id='1'";
$res0=mysqli_query($db,$sql0);
if(!$res0){
echo "error".mysqli_error($db);
          }
		  
setcookie("page_visited_already","1", time() +(10 * 365 * 24 * 60 * 60) , "/");
}
//----- daily visits -----
if (!isset($_COOKIE[date("j/n/Y")])){
$Date = date("j/n/Y"); 
$res1=mysqli_query($db,"SELECT * FROM daily_visits where Date='$Date'");
if(mysqli_num_rows($res1)==1){
$q = "UPDATE daily_visits SET  Visitors=Visitors+1 WHERE Date='$Date'" ;
mysqli_query($db, $q);
}
else {
$q = "INSERT INTO daily_visits (Date,Visitors) VALUES('$Date','1')";
mysqli_query($db, $q);
}

setcookie(date("j/n/Y"),date("j/n/Y"), time() +(10 * 365 * 24 ) , "/");
}


//-------------ALL---------------
$sql0="UPDATE visitors SET Searchvisit=Searchvisit+1 where id='1'";
$res0=mysqli_query($db,$sql0);
if(!$res0){
echo "error".mysqli_error($db);
          }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <style>
  .filterDiv {
    float: left;
    background-color: #2196F3;
    color: #ffffff;
    width: 100px;
    line-height: 100px;
    text-align: center;
    margin: 2px;
    display: none;
  }

  .show {
    display: block;
  }

  .container {
    margin-top: 20px;
    overflow: hidden;
  }

  /* Style the buttons */
  .bt {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
  }

  .bt:hover {
    background-color: #ddd;
  }

  .bt.active {
    background-color: #666;
    color: white;
  }
  </style>

<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي, بحث">
<meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
<meta name="author" content="rondili">
  <meta charset="utf-8">
  <title>Rondili - صفحة البحث</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link rel="stylesheet" href="search.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>
       <script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
       <script src="pagination-with-styles.js"></script>
<link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>

  <script src="data.js"></script>
  <script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>


function showResult(str) {
if (str.length==0) {
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.display="none";
  return;
}
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
  if (this.readyState==4 && this.status==200) {
    document.getElementById("livesearch").innerHTML=this.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    document.getElementById("livesearch").style.display="inline";
  }
}
xmlhttp.open("GET","livesearch.php?q="+str,true);
xmlhttp.send();
}

function sugtoinput(x) {
document.getElementById('searchinput').value=x;
}
</script>

</head>


<?php
ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
ini_set('error_log', './');

ini_set('session.gc_maxlifetime', 1866240000);
session_set_cookie_params(1866240000);

session_start();
include('topbar.php');

//**************************************************************************************************************
if (isset($_SESSION['Username'])) {
	  $Username=$_SESSION['Username'];
	  $q ="UPDATE statistics set Search=Search+1 WHERE Username='$Username' ";
	  mysqli_query($db, $q);
}
//************************************************************************************
require 'vendor/autoload.php';
error_reporting(E_ERROR);
$errors = array();
$obj = new \ArPHP\I18N\Arabic();

?>

<body>


<form action="search.php" method="get">

    <div class="searchbar">
    <input type="text" id="searchinput" name="search" autocomplete="off" placeholder=" ابحث عن" class="searchinput" onkeyup="showResult(this.value)">
    <div id="livesearch"></div>
    <div id="myDIV">
      <select class="dropdown" name="Job" >


	   <option value="" id="option1" selected>ابحث عن</option>
<?php include 'jobsdata.html';
?>
     </select>

    </div>

    <?php include 'wilayascript.html'; ?>
<!--
    <div id="myBtnContainer">
  <button class="bt active" onclick="filterSelection('all')"> Show all</button>
  <button class="bt" onclick="filterSelection('cars')"> Cars</button>
  <button class="bt" onclick="filterSelection('animals')"> Animals</button>
  <button class="bt" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="bt" onclick="filterSelection('colors')"> Colors</button>
</div>

<div class="container">
  <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars animals">Mustang</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("bt");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script>
       document.getElementById('mihna').remove();










	</script>
-->
	<input type="text" name="Wilaya"  value="" class="searchbtn" id="Wilaya" hidden>
    </div>
    <input type="submit" name="recherche"  value= "بحث" class="searchbtn">


				</form>
         <!-- <div class="ad1">
            this is an ad
          </div> -->
                <div class="resultscontainer">


<?php
include('ShowResults.php');
//include('pagessearch.php');
mysqli_close($db);
?>
				</div>


<div id="hiddenData">
</div>


  </body>
  <script type="text/javascript">





function sugtoinput(value) {
    document.getElementById('searchinput').value=value;
    document.getElementById("livesearch").style.display="none";
    document.getElementById('option1').innerHTML=value;
    document.getElementById('option1').value=value;



  }




  </script>
</html>
