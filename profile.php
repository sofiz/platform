<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">
  </head>

  <body>
  <?php

  $con=mysqli_connect("localhost","root","","bd", 3308);
	if(mysqli_connect_errno())
		echo"failed to connect ". mysqli_connect_error() ;

  //$id=$_GET['id'];



  $res=mysqli_query($con,"SELECT * FROM WORKER WHERE 	id=23");

  while($row=mysqli_fetch_array($res))
  {
	  $username=$row['username'];
	  $position=$row['position'];
	  $email=$row['email'];
	  $phone=$row['phone'];
	  $birthday=$row['birthday'];
	  $description=$row['description'];
	  $profile=$row['pprofile'];
	   $fname=$row['fname'];
	    $lname=$row['lname'];



  }
  $res=mysqli_query($con,"SELECT * FROM photos WHERE id=23");
    $nphotos =mysqli_num_rows($res) ;
	$i=0;
while($row=mysqli_fetch_array($res))
  {
$photos[$i]=$row['photo'];
$i++;
}



  ?>


<div class="topbar">

</div>
<div id="container" >
<div id="square1">


   <?php echo' <img id="pic"  src=" '. $profile . ' " alt="" > '; ?>

    <strong id="name" ><?php echo $fname .' '. $lname ; ?> </strong>

    <div class="rating">

      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>

    </div>

    <div class="infocontainer">



    <div class="info">
      <span><?php echo $email ; ?></span>
    </div>


    <div class="info">
      <span><?php echo $phone ; ?></span>
    </div>

    <div class="info">
      <span><?php echo $position ; ?></span>
    </div>

    <div class="info">
      <span><?php echo $birthday ; ?></span>
    </div>

    </div>
</div>

<div id="square2">


  <div class="description">
    <strong>Description</strong>
    <br>
    <br>
    <p  id="descriptiontxt"><?php echo $description ; ?></p>
  </div>


</div>

<div id="square3">
    <strong id="photostitle">Pictures</strong>
    <div class="photocontainer">


     <?php echo'<img src=" '.    $photos[0]       .' " alt="" class="imgs" > ';  ?>
    </div>
    <button id="viewallpic" type="button" name="button">See all pictures</button>
</div>

<div class="square4">
<?php
//session_start();
//for my comment
  if (isset($_SESSION['username'])) {
	  $user=$_SESSION['username'];
	  $res=mysqli_query($con,"SELECT pprofile,lname,fname,id FROM worker WHERE username='$user'");
  while($row=mysqli_fetch_array($res)) {
  	  $profile=$row['pprofile'] ;
		 		 $lname=$row['lname'] ;
				 		 $fname=$row['fname'] ;

   echo' <div class="yourcomment"> ';
  echo'  <img src=" '.   $profile     .' " alt="" id="yourcommentpic"> ';
   echo'    <form action="profile.php" method="post">   ';
  echo' <input type="text" name="" value="" id="input1">     ';
  echo' <input type="submit" name="commenter" value="" id="input1">   </div>  ';
                echo'   </form>    ';

				}
  }

  //for show all comments
$res=mysqli_query($con,"SELECT * FROM comments WHERE id=23");

while($row1=mysqli_fetch_array($res))
  {
$userid=$row1['user_id'];

$rest=mysqli_query($con,"SELECT pprofile,lname,fname FROM worker WHERE id='$userid' ");

while($row=mysqli_fetch_array($rest)){

		 $profile=$row['pprofile'] ;
		 		 $lname=$row['lname'] ;
				 		 $fname=$row['fname'] ;

}


   echo ' <div class="commentsection"> ';
        echo ' <div class="comment"> ' ;
    echo '<img class="commentimg" src="'.   $profile    .' " alt=""> ' ;
   echo ' <span class="cousername">'. $lname.'  '.$fname  . '</span> ' ;
   echo ' <br> ' ;
   echo ' <span class="commenttxt">  ' .  $row1['comment']  .'       </span> </div> </div> ' ;



}
mysqli_close($con);
?>

<!--
<div class="yourcomment">
  <img src="my pic.jpg" alt="" id="yourcommentpic">
  <input type="text" name="" value="" id="input1">

</div>



<div class="commentsection">
  <div class="comment">
    <img class="commentimg" src="my pic.jpg" alt="">
    <span class="cousername">Sofi Oussama</span>
    <br>
    <span class="commenttxt">this is a comment for this profile</span>
  </div>

  <div class="comment">
    <img class="commentimg" src="jake.jpg" alt="">
    <span class="cousername">jake the dog</span>
    <br>
    <span class="commenttxt">this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test</span>
  </div>


  <div class="comment">
    <img class="commentimg" src="hannibal.jpg" alt="">
    <span class="cousername">hannibal lecter</span>
    <br>
    <span class="commenttxt">can I eat your brain please?</span>
  </div>
</div>  -->

</div>
</div>

  </body>
</html>
