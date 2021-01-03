<?php
include('../conn.php') ;

//***********************************************************************************
session_id("session2");
session_start();
if (!isset($_SESSION['page_visited_already'])){
		include 'visitors.php'; 
		$AllVisitors++;
        $var_str1 = var_export($AllVisitors, true);
		$var_str2 = var_export($indexvisit, true);
        $var ="<?php\n\n\$AllVisitors=$var_str1;\n\n\n\$indexvisit=$var_str2;\n\n?>";
        file_put_contents('visitors.php', $var);
		$_SESSION['page_visited_already'] = 1;
}
session_write_close();
//***********************************************************************************
session_id("session1");
session_start();
include('topbar.php'); 
if (isset($_SESSION['Username'])) {
	  $Username=$_SESSION['Username'];
	  $q ="UPDATE statistics set Search=Search+1 WHERE Username='$Username' ";
	  mysqli_query($db, $q);
}
//************************************************************************************




ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require 'vendor/autoload.php';
error_reporting(E_ERROR);

$errors = array();
$obj = new \ArPHP\I18N\Arabic();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

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
  <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  	<script src="data.js"></script>
    <script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </head>

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
<script>
       document.getElementById('mihna').remove();



	</script>
	<input type="text" name="Wilaya"  value="" class="searchbtn" id="Wilaya" hidden>
    </div>
    <input type="submit" name="recherche"  value= "بحث" class="searchbtn">


				</form>
         <!-- <div class="ad1">
            this is an ad
          </div> -->
                <div class="resultscontainer">


				<?php include('ShowResults.php'); ?>
                <?php mysqli_close($db); ?>   
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
