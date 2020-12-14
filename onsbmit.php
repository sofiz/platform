<?php  

    $errors = array();

    include('conn.php');
	include('calsses and functions .php') ;
    if(isset($_POST['commenter'])){
    $rating=0;
	
	$User_id=mysqli_real_escape_string($db,$_POST['User_id']);
	$Commentor_id=mysqli_real_escape_string($db,$_POST['Commentor_id']);
	$Comment=mysqli_real_escape_string($db,$_POST['Comment']);
    $rating=mysqli_real_escape_string($db,$_POST['rating']);
	
	if (!empty($Comment)) {
		//insert new comment
	$query = "INSERT INTO comments (Comment,User_id,Commentor_id,rating) VALUES('$Comment', '$User_id','$Commentor_id','$rating') ";
	//update rating
	$query1 ="UPDATE comments set rating='$rating' WHERE User_id='$User_id' AND Commentor_id='$Commentor_id'";
	mysqli_query($db, $query);
	mysqli_query($db, $query1);
	mysqli_close($db);
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

  imagejpeg($image, $destination, $quality);

}


session_start();
$Username=$_SESSION['Username'];
if (isset($_POST['save'])||isset($_POST['savepics'])){
	//------- get id -----------------------------
	$re=mysqli_query($db,"SELECT id FROM users WHERE Username='$Username'");

	while($row=mysqli_fetch_array($re))
    {$id=$row['id']; }

  $First_Name = mysqli_real_escape_string($db, $_POST['First_Name']);
  $Last_Name = mysqli_real_escape_string($db, $_POST['Last_Name']);
  $Email =mysqli_real_escape_string($db, $_POST['Email']);
  $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
  $Job =mysqli_real_escape_string($db, $_POST['Job']);
  $Wilaya =mysqli_real_escape_string($db,$_POST['Wilaya']);
  $Daira = mysqli_real_escape_string($db,$_POST['Daira']);
  $Commune = mysqli_real_escape_string($db,$_POST['Commune']);
  $Description = mysqli_real_escape_string($db,$_POST['Description']);
  $Birthday =mysqli_real_escape_string($db, $_POST['Birthday']);

  if (empty($First_Name)) { array_push($errors, "First Name is required"); }
  if (empty($Last_Name)) { array_push($errors, "Last Name is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Phone)) { array_push($errors, "Phone is required"); }
  if (empty($Job)) { array_push($errors, "Job is required"); }
  if (empty($Wilaya)) { array_push($errors, "Wilaya is required"); }
  


  $tar="imgs/";
  $tar=$tar.basename($_FILES['fileToUpload']['name']);
  $pic=($_FILES['fileToUpload']['name']) ;


$allowedTypes = array(  IMAGETYPE_JPG,	IMAGETYPE_JPEG ,IMAGETYPE_PNG

 	);

$detectedType = exif_imagetype($_FILES['fileToUpload']['tmp_name']);
$in = in_array($detectedType, $allowedTypes);
  if($in){
	  unlink('imgs/'.$Profile_Pic);
  $queryi = "UPDATE users SET Profile_Pic='$pic' where id ='$id' ";
		if ($pic!=""){
			mysqli_query($db, $queryi);

			//move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$tar);
			
compressImage($_FILES['fileToUpload']['tmp_name'],$tar,60);
}
} 
///*************** UPDATE data *********************************************
if(count($errors) == 0) {
	$query = "UPDATE users
	SET  First_Name='$First_Name', Last_Name='$Last_Name',Email='$Email',Phone='$Phone',Job='$Job',Wilaya='$Wilaya',Daira='$Daira',Commune='$Commune',Birthday='$Birthday',Description='$Description'  WHERE id='$id'" ;
  	//$query ="UPDATE comments set rating='$rating' WHERE User_id='$User_id' AND Commentor_id='$Commentor_id'";
	mysqli_query($db, $query);
	
}
header('location:my-profile.php');
}
///-------------------------------------------------------------------------------------------------------
if (isset($_POST['savepics'])){

	/////-------------------- Get id -------------------
	$re=mysqli_query($db,"SELECT id FROM users WHERE 	Username='$Username'");
	mysqli_query($db, $re);
	while($row=mysqli_fetch_array($re))
  {$id=$row['id']; }




  $tar="imgs/";
  $tar=$tar.basename($_FILES['uploadpic']['name']) ;

  $pic=($_FILES['uploadpic']['name']) ;

  $allowedTypes = array(  IMAGETYPE_JPG,	IMAGETYPE_JPEG ,IMAGETYPE_PNG );

$detectedType = exif_imagetype($_FILES['uploadpic']['tmp_name']);
$in = in_array($detectedType, $allowedTypes);
  if($in){


  $query = "INSERT INTO photos (Photo_Path,User_id) VALUES('$pic', '$id') ";
	if ($pic!=""){
  mysqli_query($db, $query);
			  //move_uploaded_file ($_FILES['uploadpic']['tmp_name'],$tar);
			  
			  compressImage($_FILES['uploadpic']['tmp_name'],$tar,60);
			  
			  }
  }
	header('location:profile_edit.php');
	mysqli_close ( $db );

}
//////////////delete account /////////////////
if (isset($_POST['delete'])){
	
	$id=$_POST['id'];
	
	
	////////////////unlink photo profile ////////////////////

	$dpp=mysqli_query($db,"SELECT Profile_Pic FROM users WHERE id='$id'");
	$row=mysqli_fetch_array($dpp);
	
	
    if(strcmp($row['Profile_Pic'],"default.png")){
	unlink('imgs/'.$row['Profile_Pic']);
	}
    ////////////// delete profile data /////////////////////
	$dP=mysqli_query($db,"DELETE from  users WHERE id='$id'");
	/////////////// delete comments ///////////////////////
	$dC=mysqli_query($db,"DELETE from  comments WHERE User_id='$id' or Commentor_id='$id'");
	/////////////// delete photos///////////////////////////
	$du=mysqli_query($db,"SELECT Photo_Path FROM photos WHERE User_id='$id'");
	
    while($row=mysqli_fetch_array($du))

	unlink('imgs/'.$row['Photo_Path']);

		
	$dPh=mysqli_query($db,"DELETE  from  photos WHERE User_id='$id'");

    header('location:logout.php');
	
}


?>