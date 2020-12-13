<?php  
    include('conn.php');
	include('calsses and functions .php') ;
    if(isset($_POST['commenter'])){
    $rating=0;
	
	$User_id=$_POST['User_id'];
	$Commentor_id=$_POST['Commentor_id'];
	$Comment=$_POST['Comment'];
    $rating=$_POST['rating'];
	
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




session_start();
$Username=$_SESSION['Username'];
if (isset($_POST['save'])){
	//------- get id -----------------------------
	$re=mysqli_query($db,"SELECT id FROM users WHERE Username='$Username'");

	while($row=mysqli_fetch_array($re))
    {$id=$row['id']; }

  $First_Name =  $_POST['First_Name'];
  $Last_Name = mysqli_real_escape_string($db, $_POST['Last_Name']);
  $Email = $_POST['Email'];
  $Phone =  $_POST['Phone'];
  $Job = $_POST['Job'];
  $Wilaya = $_POST['Wilaya'];
  $Daira = $_POST['Daira'];
  $Commune = $_POST['Commune'];
  $Description = $_POST['Description'];
  $Birthday = $_POST['Birthday'];



  if (empty($First_Name )) { array_push($errors, "First Name is required"); }
  if (empty($Last_Name)) { array_push($errors, "Last Name is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Phone)) { array_push($errors, "Phone is required"); }
  if (empty($Job)) { array_push($errors, "Job is required"); }
  if (empty($Wilaya)) { array_push($errors, "Wilaya is required"); }
  if (empty($Daira)) { array_push($errors, "Daira is required"); }
  if (empty($Commune)) { array_push($errors, "Commune is required"); }
  if (empty($Birthday)) { array_push($errors, "Birthday is required"); }
  if (empty($Description)) { array_push($errors, "Description is required"); }


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

			move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$tar);
}
}

///*************** UPDATE data *********************************************

	$query = "UPDATE users
	SET  First_Name='$First_Name', Last_Name='$Last_Name',Email='$Email',Phone='$Phone',Job='$Job',Wilaya='$Wilaya',Daira='$Daira',Commune='$Commune',Birthday='$Birthday',Description='$Description'  WHERE id='$id'" ;
  	//$query ="UPDATE comments set rating='$rating' WHERE User_id='$User_id' AND Commentor_id='$Commentor_id'";
	mysqli_query($db, $query);

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
			  move_uploaded_file ($_FILES['uploadpic']['tmp_name'],$tar);}
  }
	header('location:profile_edit.php');
	mysqli_close ( $db );

}




?>