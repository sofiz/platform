<?php
session_start();
ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require 'vendor/autoload.php';
error_reporting(E_ERROR);

$errors = array();
$obj = new \ArPHP\I18N\Arabic();

// connect to the database

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>صفحة البحث</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="search.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  	<script src="data.js"></script>
  </head>

  <body>
  <?php include('topbar.php'); ?>
<form action="search.php" method="get">

    <div class="searchbar">
    <input type="text" name="search" placeholder=" ابحث عن" class="searchinput">
    <div id="myDIV">
      <select class="dropdown" name="Job" >


	   <option value="" selected>ابحث عن</option>
<?php include 'jobsdata.html'; ?>
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
                
				<?php include('update indexing.php'); ?>


  </body>
</html>
