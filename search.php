<?php
session_start();
if(isset($_POST['logout'])) {
  //Unset cookies and other things you want to
  session_destroy();
  header('Location: search.php'); //Dont forget to redirect
  exit;
}
if(isset($_POST['login'])) {

  header('Location: signin.php'); //Dont forget to redirect
  exit;
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="search.css">
  </head>

  <body>
<form action="search.php" method="post">
  <div class="topbar">



<div class="nav">


<?php
if (isset($_SESSION['Username'])) {

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"></a>


';
echo '<input type="submit" name="logout" value="logout" id="logout" hidden>
<label for="logout" id="logoutbtn" class="fa fa-sign-out" ></label>
';

}

else {    echo '<input type="submit" name="login" value="login"  id="login" hidden>
<label for="login" id="logoutbtn" class="fa fa-sign-in" ></label>';   }
?>

</div>
</div>

    <div class="searchbar">
    <input type="text" name="name" placeholder="search" class="searchinput">
    <div >
  <select class="dropdown" value="location" name="location" id="location">
      <option value="" selected disabled hidden>select location</option>
      <option value="00">00</option>
      <option value="01">01</option>
      <option value="10">10</option>
      <option value="11">11</option>
  </select>
    </div>
    <div >
      <select class="dropdown" name="category" id="category">
          <option value="" selected disabled hidden>select category</option>
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="10">10</option>
          <option value="11">11</option>
      </select>
    </div>
    <input type="submit" name="search"  value= "search" class="searchbtn">
    </div>



	 <?php /* include('errors.php'); */  ?>
				</form>

        <a href="profile.php?id=1" > profile </a>
<?php
$errors = array();

// connect to the database
 include('conn.php');

// REGISTER USER

if (isset($_POST['search'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $category = mysqli_real_escape_string($db, $_POST['category']);

  //if (empty($category)) { array_push($errors, "Please enter ccategory ! "); }
    //  else  if (empty($location)) {  $query = mysql_query("select fname,lname,position,id,phone  from worker where (fname like '%{$search}%') || (lname like '%{$search}%') && (work='$category')");  }
	          //else  if (empty($name)) { $query = mysql_query("select fname,lname,position,id,phone  from worker where (work='$category')  &&  (position='$location')");  }

			        // else {
					 $query = mysqli_query($db,"SELECT fname,lname,position,id,phone  FROM worker WHERE ((fname LIKE '%{$name}%') || (lname LIKE '%{$name}%' ) ) &&  (work='$category') &&  (position='$location')");
//					 }


if (mysqli_num_rows($query) == 0) {
	echo '<div class="resultcontainer"> ';
    echo ' <p id="noresult">no result found!</p>  </div> ';

	}
  else {
while($row=mysqli_fetch_array($query))
					  {
						echo'  <div class="resultcontainer">  ';
      echo'<a href="" ><img src="jake.jpg" alt="" class="resimg" ></a> ';
      echo'<div class="infocontainer"> ';
      echo'<a href="" class="name">  '. $row['fname'].$row['lname'] . ' </a>  ';
      echo'<p class="info"> ' .$row['phone'] .  '</p> ';
     echo' <p class="info">'. $row['position']. '</p>  </div> </div>   ';

					  }

}
}

?>


  </body>
</html>
