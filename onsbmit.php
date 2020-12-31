<?php

    $errors = array();

    include('../conn.php');
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

    elseif ($info['mime'] == 'image/jpg')
      $image = imagecreatefromjpeg($source);
	  
	  
	  

  imagejpeg($image, $destination, $quality);

}



session_start();
$Username=$_SESSION['Username'];



if (isset($_POST['save'])||isset($_POST['savepics'])){
	//------- get id -----------------------------
	$re=mysqli_query($db,"SELECT id,Profile_Pic FROM users WHERE Username='$Username'");

	while($row=mysqli_fetch_array($re))
    {$id=$row['id'];
     $Profile_Pic=$row['Profile_Pic'];	}

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
  
  $Facebook =mysqli_real_escape_string($db, $_POST['Facebook']);
  $Instagram =mysqli_real_escape_string($db, $_POST['Instagram']);
  
  
  if($_POST['EmailCheck']=='yes'){
  $EmailCheck =mysqli_real_escape_string($db, $_POST['EmailCheck']); }
  else  { $EmailCheck ='no'; }
  
  
  $Type="worker";

/*
  if (empty($First_Name)) { array_push($errors, "First Name is required"); }
  if (empty($Last_Name)) { array_push($errors, "Last Name is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Phone)) { array_push($errors, "Phone is required"); }
  if (empty($Job)) { array_push($errors, "Job is required"); }
  if (empty($Wilaya)) { array_push($errors, "Wilaya is required"); }  */

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

compressImage($_FILES['fileToUpload']['tmp_name'],$tar.$id.".".$extension,30);


}
}  }



///***************************************** UPDATE data *********************************************
if(count($errors) == 0) {
	$query = "UPDATE users
	SET  First_Name='$First_Name', Last_Name='$Last_Name',Email='$Email',Phone='$Phone',Job='$Job',Wilaya='$Wilaya',Daira='$Daira',Commune='$Commune',Birthday='$Birthday',Description='$Description',Type='$Type' ,Facebook='$Facebook',Instagram='$Instagram',EmailCheck='$EmailCheck' WHERE id='$id'" ;
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

	$re=mysqli_query($db,"SELECT id FROM users WHERE 	Username='$Username'");
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
			  compressImage($_FILES['uploadpic']['tmp_name'][$key],$tar.$newname.".".$extension,30);
			          }


  }
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

    header('location:logout.php');

}

if (isset($_POST['DeleteComment'])){

$Comment_id=$_POST['Comment_id'];
$User_id=$_POST['User_id'];

$D=mysqli_query($db,"DELETE  from  comments WHERE Comment_id='$Comment_id'");


header("Location:profile.php?id=".$User_id);

}
























?>
