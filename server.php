<?php
include('../conn.php') ;

$sSQL= 'SET CHARACTER SET utf8';
mysqli_query($db,$sSQL)
or die ('can\'t charset in DataBase');

ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
ini_set('display_errors', 1);
error_reporting(E_ALL);
function unichr($u) 
{
     return mb_convert_encoding('&#' . intval($u) . ';', 'UTF-8', 'HTML-ENTITIES');
}

/**
 * A map of Arabic attached forms of characters to original characters
 */
$ligature_map = array(
  unichr(0xFE80) => unichr(0x0621), 
  unichr(0xFE81) => unichr(0x0622), unichr(0xFE82) => unichr(0x0622), 
  unichr(0xFE83) => unichr(0x0623), unichr(0xFE84) => unichr(0x0623), 
  unichr(0xFE85) => unichr(0x0624), unichr(0xFE86) => unichr(0x0624), 
  unichr(0xFE87) => unichr(0x0625), unichr(0xFE88) => unichr(0x0625), 
  unichr(0xFE89) => unichr(0x0626), unichr(0xFE8B) => unichr(0x0626), 
  unichr(0xFE8C) => unichr(0x0626), unichr(0xFE8A) => unichr(0x0626), 
  unichr(0xFE8D) => unichr(0x0627), unichr(0xFE8E) => unichr(0x0627), 
  unichr(0xFE8F) => unichr(0x0628), unichr(0xFE91) => unichr(0x0628), 
  unichr(0xFE92) => unichr(0x0628), unichr(0xFE90) => unichr(0x0628), 
  unichr(0xFE93) => unichr(0x0629), unichr(0xFE94) => unichr(0x0629), 
  unichr(0xFE95) => unichr(0x062A), unichr(0xFE97) => unichr(0x062A), 
  unichr(0xFE98) => unichr(0x062A), unichr(0xFE96) => unichr(0x062A), 
  unichr(0xFE99) => unichr(0x062B), unichr(0xFE9B) => unichr(0x062B), 
  unichr(0xFE9C) => unichr(0x062B), unichr(0xFE9A) => unichr(0x062B), 
  unichr(0xFE9D) => unichr(0x062C), unichr(0xFE9F) => unichr(0x062C), 
  unichr(0xFEA0) => unichr(0x062C), unichr(0xFE9E) => unichr(0x062C), 
  unichr(0xFEA1) => unichr(0x062D), unichr(0xFEA3) => unichr(0x062D), 
  unichr(0xFEA4) => unichr(0x062D), unichr(0xFEA2) => unichr(0x062D), 
  unichr(0xFEA5) => unichr(0x062E), unichr(0xFEA7) => unichr(0x062E), 
  unichr(0xFEA8) => unichr(0x062E), unichr(0xFEA6) => unichr(0x062E), 
  unichr(0xFEA9) => unichr(0x062F), unichr(0xFEAA) => unichr(0x062F), 
  unichr(0xFEAB) => unichr(0x0630), unichr(0xFEAC) => unichr(0x0630), 
  unichr(0xFEAD) => unichr(0x0631), unichr(0xFEAE) => unichr(0x0631), 
  unichr(0xFEAF) => unichr(0x0632), unichr(0xFEB0) => unichr(0x0632), 
  unichr(0xFEB1) => unichr(0x0633), unichr(0xFEB3) => unichr(0x0633), 
  unichr(0xFEB4) => unichr(0x0633), unichr(0xFEB2) => unichr(0x0633), 
  unichr(0xFEB5) => unichr(0x0634), unichr(0xFEB7) => unichr(0x0634), 
  unichr(0xFEB8) => unichr(0x0634), unichr(0xFEB6) => unichr(0x0634), 
  unichr(0xFEB9) => unichr(0x0635), unichr(0xFEBB) => unichr(0x0635), 
  unichr(0xFEBC) => unichr(0x0635), unichr(0xFEBA) => unichr(0x0635), 
  unichr(0xFEBD) => unichr(0x0636), unichr(0xFEBF) => unichr(0x0636), 
  unichr(0xFEC0) => unichr(0x0636), unichr(0xFEBE) => unichr(0x0636), 
  unichr(0xFEC1) => unichr(0x0637), unichr(0xFEC3) => unichr(0x0637), 
  unichr(0xFEC4) => unichr(0x0637), unichr(0xFEC2) => unichr(0x0637), 
  unichr(0xFEC5) => unichr(0x0638), unichr(0xFEC7) => unichr(0x0638), 
  unichr(0xFEC8) => unichr(0x0638), unichr(0xFEC6) => unichr(0x0638), 
  unichr(0xFEC9) => unichr(0x0639), unichr(0xFECB) => unichr(0x0639), 
  unichr(0xFECC) => unichr(0x0639), unichr(0xFECA) => unichr(0x0639), 
  unichr(0xFECD) => unichr(0x063A), unichr(0xFECF) => unichr(0x063A), 
  unichr(0xFED0) => unichr(0x063A), unichr(0xFECE) => unichr(0x063A), 
  unichr(0x0640) => unichr(0x0640), 
  unichr(0xFED1) => unichr(0x0641), unichr(0xFED3) => unichr(0x0641), 
  unichr(0xFED4) => unichr(0x0641), unichr(0xFED2) => unichr(0x0641), 
  unichr(0xFED5) => unichr(0x0642), unichr(0xFED7) => unichr(0x0642), 
  unichr(0xFED8) => unichr(0x0642), unichr(0xFED6) => unichr(0x0642), 
  unichr(0xFED9) => unichr(0x0643), unichr(0xFEDB) => unichr(0x0643), 
  unichr(0xFEDC) => unichr(0x0643), unichr(0xFEDA) => unichr(0x0643), 
  unichr(0xFEDD) => unichr(0x0644), unichr(0xFEDF) => unichr(0x0644), 
  unichr(0xFEE0) => unichr(0x0644), unichr(0xFEDE) => unichr(0x0644), 
  unichr(0xFEE1) => unichr(0x0645), unichr(0xFEE3) => unichr(0x0645), 
  unichr(0xFEE4) => unichr(0x0645), unichr(0xFEE2) => unichr(0x0645), 
  unichr(0xFEE5) => unichr(0x0646), unichr(0xFEE7) => unichr(0x0646), 
  unichr(0xFEE8) => unichr(0x0646), unichr(0xFEE6) => unichr(0x0646), 
  unichr(0xFEE9) => unichr(0x0647), unichr(0xFEEB) => unichr(0x0647), 
  unichr(0xFEEC) => unichr(0x0647), unichr(0xFEEA) => unichr(0x0647), 
  unichr(0xFEED) => unichr(0x0648), unichr(0xFEEE) => unichr(0x0648), 
  unichr(0xFEEF) => unichr(0x0649), unichr(0xFEF0) => unichr(0x0649), 
  unichr(0xFEF1) => unichr(0x064A), unichr(0xFEF3) => unichr(0x064A), 
  unichr(0xFEF4) => unichr(0x064A), unichr(0xFEF2) => unichr(0x064A) 
);


 
 error_reporting(E_ERROR);
 require 'vendor/autoload.php';
 $obj = new \ArPHP\I18N\Arabic();
 


function inde_upt($db,$Username,$First_Name,$Last_Name,$Job,$Wilaya,$ligature_map,$obj){
$soundex=" " ;
 //-------------------------------
if($First_Name!=null){
$words=explode(" ",$First_Name);
foreach ($words as $word) {
$firstChar = mb_substr($word, 0, 1, "UTF-8");
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($word);
$soundex .=" ".metaphone($en_word_2);
                                       }									  
else $soundex.=" ". metaphone($word);
		                           }
	                    }
//-------------------------------
if($Last_Name!=null){
$words=explode(" ",$Last_Name);
foreach ($words as $word) {
$firstChar = mb_substr($word, 0, 1, "UTF-8");
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($word);
$soundex .=" ".metaphone($en_word_2);
                                       }									  
else $soundex.=" ". metaphone($word);
		                           }
	                    }
//-------------------------------
//---------------------------------------------
if($Job!=null){
$words=explode(" ",$Job);
foreach ($words as $word) {
$firstChar = mb_substr($word, 0, 1, "UTF-8");
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($word);
$soundex .=" ".metaphone($en_word_2);
                                       }									  
else $soundex.=" ". metaphone($word);
		                           }
	                    }
//----------------------------------------------
if($Wilaya!=null){
$words=explode(" ",$Wilaya);
foreach ($words as $word) {
$firstChar = mb_substr($word, 0, 1, "UTF-8");
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($word);
$soundex .=" ".metaphone($en_word_2);
                                       }									  
else $soundex.=" ". metaphone($word);
		                           }
	                    }
//-------------------------------
if($Username!=null){
$words=explode(" ",$Username);
foreach ($words as $word) {
$firstChar = mb_substr($word, 0, 1, "UTF-8");
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($word);
$soundex .=" ".metaphone($en_word_2);
                                       }									  
else $soundex.=" ". metaphone($word);
		                           }
	                    }
//-------------------------------

	 
$sql0="UPDATE users SET indexing='$soundex' where Username='$Username'";
$res0=mysqli_query($db,$sql0);
if(!$res0){
echo "error".mysqli_error($db);
               }
			   
			   
$rest=mysqli_query($db,"SELECT AllVisitors,Users,Unkown FROM visitors WHERE id='1' ");
while($row=mysqli_fetch_array($rest)){
$AllVisitors=$row['AllVisitors'] ;
$Users=$row['Users'] ;
$Unkown=$row['Unkown'] ;
}
$Users++;
$Unkown=$AllVisitors-$Users;
$sql0="UPDATE visitors SET Users='$Users',AllVisitors='$AllVisitors',Unkown='$Unkown' where id='1'";
$res0=mysqli_query($db,$sql0);
if(!$res0){
echo "error".mysqli_error($db);
               }
}	






// initializing variables
$Username = "";
$Email    = "";
$errors = array();

// connect to the database
 

// REGISTER USER
if (isset($_POST['SIGNUP'])) {
  // receive all input values from the form
  
  $Type=mysqli_real_escape_string($db, $_POST['typeinp']);
  $Profile_Pic="default.png";
  
  if($Type=="worker" || $Type=="client"){
  
    $First_Name = mysqli_real_escape_string($db, $_POST['First_Name']);
	$firstChar = mb_substr($First_Name, 0, 1, "UTF-8");	
    if(!in_array($firstChar, $ligature_map)){
    $First_Name  =  mb_convert_case(mb_strtolower($First_Name), MB_CASE_TITLE, "UTF-8");
    }
    
    $Last_Name = mysqli_real_escape_string($db, $_POST['Last_Name']);
    $firstChar = mb_substr($Last_Name, 0, 1, "UTF-8");	
    if(!in_array($firstChar, $ligature_map)){
    $Last_Name  =  mb_convert_case(mb_strtolower($Last_Name), MB_CASE_TITLE, "UTF-8");
    }
  $Username = mysqli_real_escape_string($db, $_POST['Username']);
  $Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
  $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  
  $EmailCheck="no"; 
  
  
  if($Type=="worker") {
	  
  $Job = mysqli_real_escape_string($db, $_POST['Job']);
  $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
  $Wilaya = mysqli_real_escape_string($db, $_POST['Wilaya']);
  
  }
 
  
  

  if ($Password_1 != $Password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Users WHERE ((Username='$Username') OR (Email='$Email')) LIMIT 1";
  $result = mysqli_query($db, $user_check_query);


  if ($User = mysqli_fetch_assoc($result)) { // if user exists
    if ($User['Username'] === $Username) {
      array_push($errors, "Username already exists");
    }

     
    if ($User['Email'] === $Email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$Password = password_hash($Password_1, PASSWORD_DEFAULT); //encrypt the password before saving in the database
   
  	$query = "INSERT INTO users (First_Name,Last_Name,Username, Email,EmailCheck, Password,Phone,Job,Wilaya,Type,Profile_Pic)
  			  VALUES('$First_Name','$Last_Name','$Username', '$Email','$EmailCheck', '$Password','$Phone','$Job','$Wilaya','$Type','$Profile_Pic')";
  	mysqli_query($db, $query);
  	$_SESSION['Username'] = $Username;
  	$_SESSION['success'] = "You are now logged in";
	//session_set_cookie_params ( array $lifetime_or_options )
	$q0 ="INSERT INTO  statistics (Username,Session_Nbr) VALUES ('$Username','1')";
	mysqli_query($db, $q0);
	$q ="UPDATE statistics set  Search='0',Myprofile='0' ,ProfileEdit='0' ,ResetPass='0 ',EnterEmail='0' WHERE Username='$Username' ";
	 mysqli_query($db, $q);
	   
     //----------------------------------------------------- update indexing-------------------------------------------------------- ---------------
      inde_upt($db,$Username,$First_Name,$Last_Name,$Job,$Wilaya,$ligature_map,$obj); 
	 
	 header('location: search.php');
    
	}
  }


if($Type=="submitted"){
	
	$First_Name = mysqli_real_escape_string($db, $_POST['First_Name']);
	$firstChar = mb_substr($First_Name, 0, 1, "UTF-8");	
    if(!in_array($firstChar, $ligature_map)){
    $First_Name  =  mb_convert_case(mb_strtolower($First_Name), MB_CASE_TITLE, "UTF-8");
    }
    
    $Last_Name = mysqli_real_escape_string($db, $_POST['Last_Name']);
    $firstChar = mb_substr($Last_Name, 0, 1, "UTF-8");	
    if(!in_array($firstChar, $ligature_map)){
    $Last_Name  =  mb_convert_case(mb_strtolower($Last_Name), MB_CASE_TITLE, "UTF-8");
    }
	
	$Job = mysqli_real_escape_string($db, $_POST['Job']);
    $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
    $Wilaya = mysqli_real_escape_string($db, $_POST['Wilaya']);
    
	$name = $First_Name.$Last_Name ;
	$Username =$First_Name. rand(0,1000000).$Last_Name.rand(0,1000000);
	$description = "***هدا الحساب مضاف و ليس شخصي ***" ; 
	
	$query = "INSERT INTO users (First_Name,Last_Name,Username,Phone,Job,Wilaya,Type,Profile_Pic,Ad,Description)
  			  VALUES('$First_Name','$Last_Name','$Username','$Phone','$Job','$Wilaya','worker','$Profile_Pic','yes','$description')";
  	mysqli_query($db, $query);
	
	
	inde_upt($db,$Username,$First_Name,$Last_Name,$Job,$Wilaya,$ligature_map,$obj); 
	
	header('location: search.php');
	
}



}



// LOGIN USER
if (isset($_POST['login'])) {
  $Username = mysqli_real_escape_string($db, $_POST['Username']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($Username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($Password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {


  	$query = "SELECT * FROM Users WHERE Username='$Username'";
	
  	$results = mysqli_query($db, $query);
	
	if(mysqli_num_rows($results) == 1 ){
	while($row=mysqli_fetch_array($results))
	$hassh = $row['Password'] ; 
	
	if(password_verify($Password,$hassh)){
  	  $_SESSION['Username'] = $Username;
  	  $_SESSION['success'] = "You are now logged in";
	  
	  $q ="UPDATE statistics set Session_Nbr=Session_Nbr+1, Search='0',Myprofile='0' ,ProfileEdit='0' ,ResetPass='0 ',EnterEmail='0' WHERE Username='$Username' ";
	  mysqli_query($db, $q);
	  
	  
	  
  	 header('location: search.php');
  	} else {
  		array_push($errors, "Wrong username/password combination");
  	}}
	
	
	else {
  		array_push($errors, "Wrong username/password combination");
  	}
	
	
	
	
  }
  
}
mysqli_close ($db);
?>
