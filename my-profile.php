<?php
  session_start();
include('conn.php');
    if (!isset($_SESSION['Username'])) {
  	header('location: signin.php');
              }

//*************************** Insert comments into table comments *****************************
  if(isset($_POST['commenter'])){

  $User_id=$_POST['User_id'];
  $Commentor_id=$_POST['Commentor_id'];
  $Comment=$_POST['Comment'];



  if (!empty($Comment)) {

  mysqli_query($db,"INSERT INTO comments (Comment,User_id,Commentor_id) VALUES('$Comment', '$User_id','$Commentor_id') " );
  mysqli_close($db);
  }

  header("Location: profile.php?id=$User_id");
}
///**********************************Get information of profile **********************
 if (isset($_SESSION['Username'])) {
    include('conn.php') ;
	$Username=$_SESSION['Username'];

  $res=mysqli_query($db,"SELECT * FROM users WHERE Username='$Username'");

  while($row=mysqli_fetch_array($res))
  {
	  $Username=$row['Username'];
	  $Wilaya=$row['Wilaya'];
	  $Daira=$row['Daira'];
	  $Commune=$row['Commune'];
	  $Email=$row['Email'];
	  $Phone=$row['Phone'];
	  $Birthday=$row['Birthday'];
	  $Description=$row['Description'];
	  $Profile_Pic=$row['Profile_Pic'];
	  $First_Name=$row['First_Name'];
	  $Last_Name=$row['Last_Name'];
	  $id=$row['id'];
	  $Job=$row['Job'];

  }
      $photo = array();

	$ress=mysqli_query($db,"SELECT * FROM photos WHERE User_id='$id'");
	$nphotos =mysqli_num_rows($ress) ;
while($row1=mysqli_fetch_array($ress))
  {
	   array_push($photo,$row1['Photo_Path']);


  }
  }

////*************************** Get Rating profile ********************
$res=mysqli_query($db,"SELECT rating,Commentor_id FROM comments where (User_id='$id') AND (Commentor_id!='$id')");
$Nc=0;
$Nrating=0;
$arr =  array("-1","-2");
while($row=mysqli_fetch_array($res))
  {
	                      $flag=true ;
						  for($j=0;$j<count($arr);$j++)
						  if($arr[$j]==$row['Commentor_id']) { $flag=false ; }
						  if($flag){
	  $Nrating=$Nrating+$row['rating'];
						  $Nc++;
						  array_push($arr,$row['Commentor_id']);
 }

  }
  if($Nc>0)
  $Mrating = (int)($Nrating/$Nc) ;
  else $Mrating =0 ;
?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
  </head>

  <body>

  <?php


  ?>

 <?php include('topbar.php'); ?>

<div id="container" >
<div id="square1">


   <?php echo' <img id="pic"  src="imgs/'. $Profile_Pic . ' " alt="" class="pictures" onclick="slide(this.src)"  > '; ?>

    <strong id="name" ><?php echo $First_Name .' '. $Last_Name ; ?> </strong>

    <div class="rating">
 <?php
 echo "<div class='ratingcontain'>";
     for ($j=1;$j<=$Mrating;$j++)
	 echo '<span class="fa fa-star checked"></span>' ;
      if ($Mrating<5)
      for($j=$Mrating;$j<5;$j++)
     echo ' <span class="fa fa-star unchecked" ></span>' ;
       echo "</div>";
?>



    </div>

    <div class="infocontainer">

      <div class="info">
				<span class="fas fa-briefcase" style="font-family: 'FontAwesome';margin-right: 10px;color: #036fa1;"></span>
			      <span style="font-size: 15px;"><?php echo $Job ; ?></span>
			    </div>

			    <div class="info">
						<span class="fas fa-map-marker" style="font-family: 'FontAwesome';margin-right: 10px;font-size: 18px;color: #036fa1;"></span>
			      <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;"><?php echo $Wilaya.", ".$Daira.", ".$Commune ; ?></span>
			    </div>

					<div class="info">
						<span class="fas fa-phone" style="font-family: 'FontAwesome';margin-right: 10px;font-size: 18px;color: #036fa1;"></span>
			      <span><?php echo $Phone ; ?></span>
			    </div>

    <div class="info">
			<span class="fas fa-envelope" style="font-family: 'FontAwesome';margin-right: 10px;color: #036fa1;"></span>
      <span><?php echo $Email ; ?></span>
    </div>




    <div class="info">
			<span class="fas fa-birthday-cake" style="font-family: 'FontAwesome';margin-right: 10px;color: #036fa1;"></span>
      <span><?php echo $Birthday ; ?></span>
    </div>

    </div>
    <div style="margin-left: 176px;;margin-top:7px;">
<a class="btn1" href="profile_edit.php" style="color:#ffffffeb;">Edit Profile</a>
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
	 if($nphotos>3){for($j=0;$j<3;$j++){
	echo '<img src="imgs/'.$photo[$j].'" alt="" class="imgs" onclick="slide(this.src)" >';

}
	}
else if(($nphotos<=3) && ($nphotos>0)){
	for($j=0;$j<$nphotos;$j++){
	echo '<img src="imgs/'.$photo[$j].'" alt="" class="imgs" onclick="slide(this.src)" >';

}}
	 ?>
    </div>
    <button id="viewallpic" type="button" name="button">See all</button>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="photocontainermodal">
    <?php


	for($j=0;$j<$nphotos;$j++){
      echo '<div id="pic " class="piccontainer">';
      echo '<img src="imgs/'.$photo[$j] .'" alt="" class="imgs pictures" onclick="slide(this.src)" >';
	  echo ' </div>';

	 }
	 ?>

    </div>
  </div>


</div>


<!-- Trigger the Modal -->
<img id="myImgx" src="" alt="" hidden>

<!-- The Modal -->
<div id="myModalx" class="modalx">

  <!-- The Close Button -->
  <span class="closex">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-contentx" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
  <a class="prev" id ="prev" onclick="prev()">&#10094;</a>
  <a class="next" id = "next" onclick="next()">&#10095;</a>
</div>


<div class="square4">
  <strong class="titles">Reviews</strong>
<?php

//-------------for my comment-------------------------------------------

  if (isset($_SESSION['Username'])) {
	  $user=$_SESSION['Username'];
	  $res=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name,id FROM users WHERE Username='$user'");
  while($row=mysqli_fetch_array($res)) {
  	            $Profile_Pic=$row['Profile_Pic'] ;
		 		 $Last_Name=$row['Last_Name'] ;
				 $First_Name=$row['First_Name'] ;
				 $Commentor_id=$row['id'];
				 }
 echo'    <form action="my-profile.php" method="post">   ';
   echo' <div class="yourcomment"> ';
   echo'  <img src="imgs/'.  $Profile_Pic    .'" class="commentimg"  alt="" id="yourcommentpic" style="position: absolute;" > ';

  echo' <input type="text" name="Comment"  id="input2">';
  echo '<input type= "hidden"  name="Commentor_id"  value="'.$Commentor_id.'" >   ';
  echo '<input type= "hidden"  name="User_id"  value="'.$id.'" >   ';
  echo' <input type="submit" name="commenter" value="commenter" id="submitreview" hidden>
<label for="submitreview" class="fa fa-send" id="submitreview3"></label></div>';
                echo'   </form>    ';


  }

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
   echo '<a href="profile.php?id='.$Commentor_id.'" style="text-decoration: none; color: black;"> <img class="commentimg" src="imgs/'.   $Profile_Pic1    .' " alt="" onerror="error(this)"> </a>' ;
   echo '<div style="    display: inline-grid;">';
   echo ' <a href="profile.php?id='.$Commentor_id.'" style="text-decoration: none; color: black;"> <span class="cousername">'. $First_Name1.'  '.$Last_Name1  . '</span> </a>' ;

    if($Commentor_id != $id)
  {
 echo "<div class='ratingcontain3'>";
     for ($j=1;$j<=$row['rating'];$j++)
	 echo '<span class="fa fa-star checked"></span>' ;
      if ($row['rating']<5)
      for($j=$row['rating'];$j<5;$j++)
     echo ' <span class="fa fa-star unchecked"></span>' ;
       echo "</div>";


  }




   echo ' <span class="commenttxt">  ' .  $row['Comment']  .'       </span> </div> </div> ' ;echo '</div>';
   }
mysqli_close($db);
?>
</div>

</div>

  </body>



  <script type="text/javascript">

  var imgs_path = "http://localhost/platforme/imgs/"

  document.getElementById('pic').onerror = function() {
    document.getElementById('pic').src = "imgs/default.png";
  }
	document.getElementById('yourcommentpic').onerror = function() {
    document.getElementById('yourcommentpic').src = "imgs/default.png";
  }
 function error(v){
	 v.src="imgs/default.png";
 }


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



  // Get the modal
  var modalx = document.getElementById("myModalx");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImgx");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modalx.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("closex")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modalx.style.display = "none";
  }
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modalx) {
      modalx.style.display = "none";

    }
  }

  Array.prototype.remove = function() {
      var what, a = arguments, L = a.length, ax;
      while (L && this.length) {
          what = a[--L];
          while ((ax = this.indexOf(what)) !== -1) {
              this.splice(ax, 1);
          }
      }
      return this;
  };



  var n ;


  var pictures = document.getElementsByClassName("pictures");

  function slide(e){

  pictures = document.getElementsByClassName("pictures");
  s=[];
  for (p in pictures){
  s.push(pictures[p].src)
  }
  s.remove(undefined);
  n = s.indexOf(e);
  n= Number(n);
  console.log(n);
  console.log(e);

  function op(){
  n= Number(n);
  var x = pictures[n].src;
  document.getElementById("myImgx").src = x;
  document.getElementById("myImgx").click();}

  op()

  var d=document.getElementById("prev");
  var nx=document.getElementById("next");

  l = s.length - 1;
  console.log(l);
  if (n==0){

    d.style.display = "none";
  }

  else if (n==l){
    nx.style.display = "none";
  }

  else {
    d.style.display = "block";
    nx.style.display = "block";

  }

  }

  //slide()

  function next(){
    n=n+1;
    slide(pictures[n].src);
  }

  function prev(){
    n=n-1;
    slide(pictures[n].src);
  }


/*
  function openmodal(x){
  document.getElementById("myImgx").src = x;
  document.getElementById("myImgx").click();
  }
*/
  </script>
</html>
