<!DOCTYPE html>
<?php session_start();  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
  </head>

  <body>


<?php include('conn.php') ?>
<?php
$id=$_GET['id'];


//------------------------------------select profile data--------------------------------------------------
  $res=mysqli_query($db,"SELECT * FROM users WHERE 	id='$id'");

  while($row=mysqli_fetch_array($res))
  {
  $First_Name = mysqli_real_escape_string($db,$row['First_Name']);
  $Last_Name = mysqli_real_escape_string($db,$row['Last_Name'] );


	  $Profile_Pic=$row['Profile_Pic'];
	  $Username=$row['Username'];
	  $Location=$row['Location'];
	  $Email=$row['Email'];
	  $Phone=$row['Phone'];
	  $Birthday=$row['Birthday'];
	  $Description=$row['Description'];




  }

  //--------------select photos -----------------------
  $res=mysqli_query($db,"SELECT * FROM photos WHERE User_id='$id'");
    $nphotos =mysqli_num_rows($res) ;
	$i=0;
while($row=mysqli_fetch_array($res))
  {
$photo[$i]=$row['Photo_Path'];
$i++;
}



  ?>


<div class="topbar">

</div>
<div id="container" >
<div id="square1">


   <?php echo' <img id="pic"  src="imgs/'. $Profile_Pic . ' " alt="" > '; ?>

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
    <strong class="titles">Description</strong>
    <p  id="descriptiontxt"><?php echo $Description ; ?></p>
  </div>


</div>

<div id="square3">
    <strong id="photostitle" class="titles">Pictures</strong>
    <div class="photocontainer">


     <?php
	 //for($j;$j<=$i;j++)

	 echo'<img src="imgs/ '.    isset($photo[0] )      .' " alt="" class="imgs" > ';
	 echo'<img src="imgs/ '.   isset($photo[1] )      .' " alt="" class="imgs" > ';
	 echo'<img src="imgs/ '.   isset( $photo[2] )      .' " alt="" class="imgs" > ';


	 ?>
    </div>
    <button id="viewallpic" type="button" name="button">See all pictures</button>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="photocontainermodal">
    <?php

	// -------------show photos in window and save (Photos_ids) in array if user click on X -----------------------
	for($j=0;$j<$nphotos;$j++){
      echo '<div id="pic'. $Photo_id[$j].'" class="piccontainer">';
       echo '<img src="'. $Photo[$j] .'" alt="" class="imgs">';
	 echo ' </div>';

	 }
	 ?>

    </div>
  </div>


</div>


<div class="square4">
  <strong class="titles">Reviews</strong>
<?php

//-------------for my comment-------------------------------------------

  if (isset($_SESSION['Username'])) {
	  $user=$_SESSION['Username'];
	  $res=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name FROM users WHERE Username='$user'");
  while($row=mysqli_fetch_array($res)) {
  	  $Profile_Pic=$row['Profile_Pic'] ;
		 		 $Last_Name=$row['Last_Name'] ;
				 		 $First_Name=$row['First_Name'] ;}

   echo' <div class="yourcomment"> ';
  echo'  <img src="imgs/ '.   $Profile_Pic    .' " alt="" id="yourcommentpic"> ';
   echo'    <form action="profile.php" method="post">   ';
  echo' <input type="text" name="" value="" id="input1">     ';
  echo' <input type="submit" name="commenter" value="post" id="submitreview" hidden></div>
<label for="submitreview" class="fa fa-send" id="submitreview2"></label>


   ';
                echo'   </form>    ';


  }

  //------------------------------for show all comments------------------
$User_id=$id ;
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
</div>
 </body>

 <script type="text/javascript">

 // Get the modal
 var modal = document.getElementById("myModal");

 // Get the button that opens the modal
 var btn = document.getElementById("viewallpic");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

 // When the user clicks the button, open the modal
 btn.onclick = function() {
   modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
   modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = "none";

   }
 }

 </script>
</html>
