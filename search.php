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
  </head>

<style media="screen">
    body{
      padding-top: 0px;

      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(-45deg, rgb(28 181 0) 0%, rgb(154 252 136) 100%);
      background-size: 500%;
      animation-name: mymove;
      animation-direction: alternate;
      animation-iteration-count: infinite;
      animation-duration: 15s;
    }

    .topbar{

      background: #ffffffde;
      width: 100%;
      height: 50px;
      top: 0px;
      position: absolute;
      left: 0;
    }

    .searchbar{
    margin-top:100px;
    margin-left:300px;
    display:flex;

    }

    .searchinput{

      height: 30px;
    width: 50%;
    background: #ffffffc2;
    border: none;
    border-radius: 5px;
    padding-left: 10px;
    font-size: 18px;
    font-family: 'Quicksand';
    }

    .dropdown{

      height: 32px;
    background: #ffffffc2;
    border: none;
    border-radius: 5px;
    margin-left: 10px;
    font-family: 'Quicksand';
    }
.resimg{
height:60px;
margin:15px;
border-radius:7px;
width: 60px;
object-fit: cover;
}
.resultcontainer{

  width: 58.3%;
    background: #ffffffc2;
    margin-left: 300px;
    margin-top: 20px;
    border-radius: 15px;
    display:flex;
}

.info{

  margin-top: 5px;
    margin-bottom: 0px;
}

.infocontainer{

  margin-top: 13px;
  margin-bottom:13px;
}

    .name{
      text-decoration: none;
color: black;
      font-weight:bold
    }

#noresult{
margin:15px;
font-weight:bold;

}


    @keyframes mymove {
      0%   {background-position: 0%;}
      50%  {background-position: 100%;}

    }
</style>
  <body>
    <div class="topbar">
	
  <form action="search.php" method="post">
<?php 
  if (isset($_SESSION['Username'])) {
  
	echo  '<a href="my-profile.php">   my profile  </a> ';
	echo '<input type="submit" name="logout" value="logout" >';
  	
  }
  
  else {    echo '<input type="submit" name="login" value="login" >';   }  
  ?> 
  <a href="profile.php?id=1" > profile </a> </div>
  
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
    </div>
	<input type="submit" name="search"  value="search">
	 
	
	 <?php /* include('errors.php'); */  ?>  
				</form>
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
