<?php

session_start();
// initializing variables
$Username = "";
$Email    = "";
$errors = array();

// connect to the database
 include('../conn.php') ;

// REGISTER USER
if (isset($_POST['SIGNUP'])) {
  // receive all input values from the form
  $First_Name = mysqli_real_escape_string($db, $_POST['First_Name']);
  $Last_Name = mysqli_real_escape_string($db, $_POST['Last_Name']);
  $Username = mysqli_real_escape_string($db, $_POST['Username']);
  $Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
  $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);
  $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
  
  
  $Job = mysqli_real_escape_string($db, $_POST['Job']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  
  $Type=mysqli_real_escape_string($db, $_POST['Type']);
  
  $Wilaya = mysqli_real_escape_string($db, $_POST['Wilaya']);
  

  
  $Profile_Pic="default.png";

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  /*
  if (empty($First_Name )) { array_push($errors, "First Name is required"); }
  if (empty($Last_Name)) { array_push($errors, "Last Name is required"); }
  if (empty($Username)) { array_push($errors, "Username is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Phone)) { array_push($errors, "Phone is required"); }
  if (empty($Job)) { array_push($errors, "Job is required"); }
  if (empty($Wilaya)) { array_push($errors, "Wilaya is required"); }
  if (empty($Type)) { array_push($errors, "Type is required"); }
  if (empty($Password_1)) { array_push($errors, "Password is required"); }
  
  */
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
  	$Password =  md5($Password_1);//encrypt the password before saving in the database
    ///$password =password_hash($password, PASSWORD_DEFAULT);
  	$query = "INSERT INTO Users (First_Name,Last_Name,Username, Email, Password,Phone,Job,Wilaya,Type,Profile_Pic)
  			  VALUES('$First_Name','$Last_Name','$Username', '$Email', '$Password','$Phone','$Job','$Wilaya','$Type','$Profile_Pic')";
  	mysqli_query($db, $query);
  	$_SESSION['Username'] = $Username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: search.php');
  }
  mysqli_close ( $db );
}


// ...





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

	/*  $res=mysqli_query($db,"SELECT username , password , id FROM worker " );

					  while($row=mysqli_fetch_array($res))
					  {
						  if((password_verify($password,$row['password']) )&& ($username==$row['username']))
						   {
							   $_SESSION['username'] = $username;
  	                           $_SESSION['success'] = "You are now logged in";
  	                          header('location: search.html');
						  }
						  else {
  		                 array_push($errors, "Wrong username/password combination");
  	}
					  }
					     */


  	$Password =  md5($Password);
	//$password =password_hash($password, PASSWORD_DEFAULT);

  	$query = "SELECT * FROM Users WHERE Username='$Username' AND Password='$Password'";

  	$results = mysqli_query($db, $query);
	//if(password_verify($password, $results['Password']) && $username==$results['username'])
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['Username'] = $Username;
  	 $_SESSION['success'] = "You are now logged in";
  	 header('location: search.php');
  	} else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  mysqli_close ( $db );
}

?>
