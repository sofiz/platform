<?php
  session_start();

    if (!isset($_SESSION['Username'])) {
  	header('location: login.php');
              }
 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
  </head>

  <body>

  <?php


  if (isset($_SESSION['Username'])) {
    include('conn.php') ;
	$Username=$_SESSION['Username'];

  $res=mysqli_query($db,"SELECT * FROM users WHERE Username='$Username'");

  while($row=mysqli_fetch_array($res))
  {
	  $Username=$row['Username'];
	  $Location=$row['Location'];
	  $Email=$row['Email'];
	  $Phone=$row['Phone'];
	  $Birthday=$row['Birthday'];
	  $Description=$row['Description'];
	  $Profile_Pic=$row['Profile_Pic'];
	  $First_Name=$row['First_Name'];
	  $Last_Name=$row['Last_Name'];
	  $id=$row['id'];



  }
  $res=mysqli_query($db,"SELECT * FROM photos WHERE User_id='$id'");
    $nphotos =mysqli_num_rows($res) ;
	$i=0;
while($row=mysqli_fetch_array($res))
  {
$photo[$i]=$row['Photo_Path'];
$i++;
}
  }
  ?>


<div class="topbar">

</div>
<div id="container" >
<div id="square1">


   <?php echo' <img id="pic"  src="imgs/ '. $Profile_Pic . ' " alt="" > '; ?>

    <strong id="name" ><?php echo $First_Name .' '. $Last_Name ; ?> </strong>

    <div class="rating">

      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>

    </div>

    <div class="infocontainer">



    <div class="info">
      <span><?php echo $Email ; ?></span>
    </div>


    <div class="info">
      <span><?php echo $Phone ; ?></span>
    </div>

    <div class="info">
      <span><?php echo $Location ; ?></span>
    </div>

    <div class="info">
      <span><?php echo $Birthday ; ?></span>
    </div>

    </div>
</div>

<div id="square2">


  <div class="description">
    <strong>Description</strong>
    <br>
    <br>
    <span><?php echo $Description ; ?></span>
  </div>


</div>

<div id="square3">
    <strong id="photostitle" class="titles">Pictures</strong>
    <div class="photocontainer">
	<?php
     echo'<img src="imgs/ '.    isset($photo[0] )      .' " alt="" class="imgs" > ';
	 echo'<img src="imgs/ '.   isset($photo[1] )      .' " alt="" class="imgs" > ';
	 echo'<img src="imgs/ '.   isset( $photo[2] )      .' " alt="" class="imgs" > ';
?>
    </div>
    <button id="viewallpic" type="button" name="button">See all pictures</button>
</div>

<div class="square4">
<?php

  //for show all comments

$res=mysqli_query($db,"SELECT * FROM comments WHERE User_id='$id'");

while($row=mysqli_fetch_array($res))
  {

$Commentor_id=$row['Commentor_id'] ;
$rest=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name FROM users WHERE id='$Commentor_id' ");

while($row1=mysqli_fetch_array($rest))
       {

		 $Profile_Pic1=$row1['Profile_Pic'] ;
		 $Last_Name1=$row1['Last_Name'] ;
		 $First_Name1=$row1['First_Name'] ;

              }


   echo ' <div class="commentsection"> ';
   echo ' <div class="comment"> ' ;
   echo '<img class="commentimg" src="'.   $Profile_Pic1    .' " alt=""> ' ;
   echo ' <span class="cousername">'. $First_Name1.'  '.$Last_Name1  . '</span> ' ;
   echo ' <br> ' ;
   echo ' <span class="commenttxt">  ' .  $row['Comment']  .'       </span> </div> </div> ' ;
   }
mysqli_close($db);
?>
</div>
<a href='profile_edit.php' > <button> edit </button> </a>
</div>

  </body>
</html>
