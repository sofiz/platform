<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bd',3308);
if(mysqli_connect_errno())
		echo"failed to connect ". mysqli_connect_error() ;

// REGISTER USER
if (isset($_POST['SIGNUP'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $work = mysqli_real_escape_string($db, $_POST['work']);
  $position = mysqli_real_escape_string($db, $_POST['position']);
  $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($work)) { array_push($errors, "Work is required"); }
  if (empty($position)) { array_push($errors, "Position is required"); }
  if (empty($birthday)) { array_push($errors, "Birthday is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM worker WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password =  md5($password_1);//encrypt the password before saving in the database
    ///$password =password_hash($password, PASSWORD_DEFAULT);
  	$query = "INSERT INTO worker (fname,lname,username, email, password,phone,work,position,birthday) 
  			  VALUES('$fname','$lname','$username', '$email', '$password','$phone','$work','$position','$birthday')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: search.html');
  }
}


// ...





// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
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
	  
	  
  	$password =  md5($password);
	//$password =password_hash($password, PASSWORD_DEFAULT);
	
  	$query = "SELECT * FROM worker WHERE username='$username' AND password='$password'";
	
  	$results = mysqli_query($db, $query);
	//if(password_verify($password, $results['password']) && $username==$results['username'])
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	 $_SESSION['success'] = "You are now logged in";
  	 header('location: search.html');
  	} else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
