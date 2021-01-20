<?php
include('../conn.php');
//---------------------------for update indexing ---------------------------------------------
function unichr($u) 
{
     return mb_convert_encoding('&#' . intval($u) . ';', 'UTF-8', 'HTML-ENTITIES');
}

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
//------------------------------------------------------------------------------------------------------------------------------------------------

    $errors = array();
    
	include('calsses and functions .php') ;
	
	
if(isset($_POST['commenter'])){


	$User_id=mysqli_real_escape_string($db,$_POST['User_id']);
	$Commentor_id=mysqli_real_escape_string($db,$_POST['Commentor_id']);
	$Comment=mysqli_real_escape_string($db,$_POST['Comment']);
    $rating=mysqli_real_escape_string($db,$_POST['rating']);

	if(empty($rating))   $rating=0;

	if (!empty($Comment)) {
		//insert new comment
	$query = "INSERT INTO comments (Comment,User_id,Commentor_id,rating) VALUES('$Comment', '$User_id','$Commentor_id','$rating') ";
	//update rating
	$query1 ="UPDATE comments set rating='$rating' WHERE User_id='$User_id' AND Commentor_id='$Commentor_id'";
	mysqli_query($db, $query);
	mysqli_query($db, $query1);
	
	}
	
	
	header("Location:profile.php?id=".$User_id);

}

function compressImage($source, $destination, $quality) {

  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg')
    $image = imagecreatefromjpeg($source);

  elseif ($info['mime'] == 'image/gif')
    $image = imagecreatefromgif($source);

  elseif ($info['mime'] == 'image/png')
    $image = imagecreatefrompng($source);

    elseif ($info['mime'] == 'image/jpg')
      $image = imagecreatefromjpeg($source);
	  
	  
	  

  imagejpeg($image, $destination, $quality);

}

session_start();
$Username=$_SESSION['Username'];

if (isset($_POST['save'])||isset($_POST['savepics'])){
	//------- get id -----------------------------
	$re=mysqli_query($db,"SELECT id,Profile_Pic FROM users WHERE Username='$Username'");

  while($row=mysqli_fetch_array($re)){
  $id=$row['id'];
  $Profile_Pic=$row['Profile_Pic'];	}
  
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
	
  $Email =mysqli_real_escape_string($db, $_POST['Email']);
  $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
  $Job =mysqli_real_escape_string($db, $_POST['Job']);
  $Wilaya =mysqli_real_escape_string($db,$_POST['Wilaya']);
  $Daira = mysqli_real_escape_string($db,$_POST['Daira']);
  $Commune = mysqli_real_escape_string($db,$_POST['Commune']);
  $Description = mysqli_real_escape_string($db,$_POST['Description']);
  if($_POST['Birthday']!='' )
  {
  $Birthday = mysqli_real_escape_string($db,$_POST['Birthday']);
  }
  else  {$Birthday = '0000-00-00'; 
        }
  $Facebook = mysqli_real_escape_string($db, $_POST['Facebook']);
  $Instagram = mysqli_real_escape_string($db, $_POST['Instagram']);
  $Type="worker";
  
  if($_POST['EmailCheck']=='yes'){
  $EmailCheck =mysqli_real_escape_string($db, $_POST['EmailCheck']); }
  else  { $EmailCheck ='no'; }
  
if ($_FILES['fileToUpload']['size'] != 0 ){
if (!file_exists('imgs/'.$id)) {
    mkdir('imgs/'.$id, 0777, true);
}

  $tar= 'imgs/'.strval($id).'/';

  //$tar=$tar.basename($_FILES['fileToUpload']['name']);
 // $pic=($_FILES['fileToUpload']['name']) ;
$extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);

  //$pic=($_FILES['uploadpic']['name']) ;
$pic=$id.".".$extension;

$allowedTypes = array( 	IMAGETYPE_JPEG ,IMAGETYPE_PNG

 	);

$detectedType = exif_imagetype($_FILES['fileToUpload']['tmp_name']);

$in = in_array($detectedType, $allowedTypes);
if($in){

$queryi = "UPDATE users SET Profile_Pic='$pic' where id ='$id' ";
if ($pic!=""){
mysqli_query($db, $queryi);
unlink('imgs/'.strval($id).'/'.$Profile_Pic);
//move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$tar);

compressImage($_FILES['fileToUpload']['tmp_name'],$tar.$id.".".$extension,15);


}
}


}
//----------------------------------------------------- update indexing-------------------------------------------------------- ---------------
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
if($Daira!=null){
$words=explode(" ",$Daira);
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
if($Commune!=null){
$words=explode(" ",$Commune);
foreach ($words as $word) {
$firstChar = mb_substr($word, 0, 1, "UTF-8");
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($word);
$soundex .=" ".metaphone($en_word_2);
                                       }									  
else $soundex.=" ". metaphone($word);
		                           }
	                    }
  
///***************************************** UPDATE data *********************************************
if(count($errors) == 0) {
$query = "UPDATE users
SET  indexing='$soundex',First_Name='$First_Name', Last_Name='$Last_Name',Email='$Email',Phone='$Phone',Job='$Job',Wilaya='$Wilaya',Daira='$Daira',Commune='$Commune',Birthday='$Birthday',Description='$Description',Type='$Type' ,Facebook='$Facebook',Instagram='$Instagram',EmailCheck='$EmailCheck' WHERE id='$id'" ;
//$query ="UPDATE comments set rating='$rating' WHERE User_id='$User_id' AND Commentor_id='$Commentor_id'";
mysqli_query($db, $query);

}


header('location:my-profile.php');
}
///-------------------------------------------------------------------------------------------------------

if (isset($_POST['savepics'])){

	foreach($_FILES['uploadpic']['name'] as $key=>$val){
	if ($_FILES['uploadpic']['size'][$key] != 0 	&& $_FILES['uploadpic']['size'][$key] < 2097152 ){

		if (!file_exists('imgs/'.$id)) {

    mkdir('imgs/'.$id, 0777, true);

}
	/////-------------------- Get id -------------------

	$re=mysqli_query($db,"SELECT id FROM users WHERE Username='$Username'");
	while($row=mysqli_fetch_array($re))
    {$id=$row['id']; }

$getmaxid = mysqli_query($db," SELECT MAX(Photo_id) AS id FROM photos ");
$row77 = mysqli_fetch_array($getmaxid);
$maxid=$row77["id"];

	$maxid++;

	$newname = strval($id).strval($maxid);

  $tar='imgs/'.$id.'/';
  //$tar=$tar.basename($_FILES['uploadpic']['name']) ;

  $extension = pathinfo($_FILES["uploadpic"]["name"][$key], PATHINFO_EXTENSION);


  //$pic=($_FILES['uploadpic']['name']) ;
  $pic=$newname.".".$extension;


  $allowedTypes = array(  IMAGETYPE_JPG ,	IMAGETYPE_JPEG ,IMAGETYPE_PNG );

$detectedType = exif_imagetype($_FILES['uploadpic']['tmp_name'][$key]);
$in = in_array($detectedType, $allowedTypes);
  if($in){


  $query = "INSERT INTO photos (Photo_Path,User_id) VALUES('$pic', '$id') ";
	if ($pic!=""){
  mysqli_query($db, $query);
			  //move_uploaded_file ($_FILES['uploadpic']['tmp_name'],$tar);

			  //compressImage($_FILES['uploadpic']['tmp_name'],$tar,60);
			  compressImage($_FILES['uploadpic']['tmp_name'][$key],$tar.$newname.".".$extension,15);
			          }


  }
	}
  }

header('location:profile_edit.php');
}
//////////////delete account /////////////////

if (isset($_POST['delete'])){

	$id=$_POST['id'];


	////////////////unlink photo profile ////////////////////

	$dpp=mysqli_query($db,"SELECT Profile_Pic FROM users WHERE id='$id'");
	$row=mysqli_fetch_array($dpp);


    if(strcmp($row['Profile_Pic'],"default.png")){
	unlink('imgs/'.$id.'/'.$row['Profile_Pic']);
	}
    ////////////// delete profile data /////////////////////
	$dP=mysqli_query($db,"DELETE from  users WHERE id='$id'");
	/////////////// delete comments ///////////////////////
	$dC=mysqli_query($db,"DELETE from  comments WHERE User_id='$id' or Commentor_id='$id'");
	/////////////// delete photos///////////////////////////



	$du=mysqli_query($db,"SELECT Photo_Path FROM photos WHERE User_id='$id'");

    while($row=mysqli_fetch_array($du))

	unlink('imgs/'.$id.'/'.$row['Photo_Path']);

    rmdir ('imgs/'.$id );

	$dPh=mysqli_query($db,"DELETE  from  photos WHERE User_id='$id'");
	
//***********************************delet from visitors**********************
$rest=mysqli_query($db,"SELECT AllVisitors,Users,Unkown FROM visitors WHERE id='1' ");
while($row=mysqli_fetch_array($rest)){
$AllVisitors=$row['AllVisitors'] ;
$Users=$row['Users'] ;
$Unkown=$row['Unkown'] ;
}
$Users--;
$Unkown=$AllVisitors-$Users;
$sql0="UPDATE visitors SET Users='$Users',AllVisitors='$AllVisitors',Unkown='$Unkown' where id='1'";
$res0=mysqli_query($db,$sql0);
if(!$res0){
echo "error".mysqli_error($db);
               }
	
    header('location:logout.php');

}

if (isset($_POST['DeleteComment'])){

$Comment_id=$_POST['Comment_id'];
$User_id=$_POST['User_id'];

$D=mysqli_query($db,"DELETE  from  comments WHERE Comment_id='$Comment_id'");


header("Location:profile.php?id=".$User_id);

}

if(isset($_POST['sendreport'])) {

$Email = mysqli_real_escape_string($db, $_POST['Email']);
$Name = mysqli_real_escape_string($db, $_POST['Name']);
$Report = mysqli_real_escape_string($db, $_POST['Report']);

$query = "INSERT INTO reports (Name,Email,Report)
  			  VALUES('$Name','$Email','$Report')";
  	mysqli_query($db, $query);

header("Location:search.php");
}

mysqli_close($db);
?>
