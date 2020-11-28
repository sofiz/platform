<?php include('conn.php') ?>
<?php
session_start();
//----------------------------------------

$id=$_GET['id'];
//------id exist in our system or not -----------

$res=mysqli_query($db,"SELECT id FROM users ");
$flag = false ;
while($row=mysqli_fetch_array($res)){
	if($row['id']==$id) $flag=true;
}

if(!$flag) header("Location: search.php" );

//-------------------------------------------------------------
 if (isset($_SESSION['Username'])) {
	  $user=$_SESSION['Username'];
	  $res=mysqli_query($db,"SELECT id FROM users WHERE Username='$user'");
  while($row=mysqli_fetch_array($res)) {

  $idp=$row['id'] ;
  }
  if($idp==$id){header("Location: my-profile.php");}
  }
  //******************************************
if(isset($_POST['commenter'])){

	$User_id=$_POST['User_id'];
	$Commentor_id=$_POST['Commentor_id'];
	$Comment=$_POST['Comment'];
  $rating=$_POST['rating'];
	include('conn.php');
	if (!empty($Comment)) {
		//insert new comment
	$query = "INSERT INTO comments (Comment,User_id,Commentor_id,rating) VALUES('$Comment', '$User_id','$Commentor_id','$rating') ";
	//update rating
	$query1 ="UPDATE comments set rating='$rating' WHERE User_id='$User_id' AND Commentor_id='$Commentor_id'";
	mysqli_query($db, $query);
	mysqli_query($db, $query1);
	mysqli_close($db);
	}
	header("Location: profile.php?id=".$User_id );


}
//--------------------------------------select profile data ($id) FROM URL--------------------------------------------------
  $res=mysqli_query($db,"SELECT * FROM users WHERE 	id='$id'");

  while($row=mysqli_fetch_array($res))
  {
  $First_Name = mysqli_real_escape_string($db,$row['First_Name']);
  $Last_Name = mysqli_real_escape_string($db,$row['Last_Name'] );


	  $Profile_Pic=$row['Profile_Pic'];
	  $Username=$row['Username'];
	  $Wilaya=$row['Wilaya'];
	  $Daira=$row['Daira'];
	  $Commune=$row['Commune'];
	  $Email=$row['Email'];
	  $Phone=$row['Phone'];
	  $Birthday=$row['Birthday'];
	  $Description=$row['Description'];
	  $Job=$row['Job'];




  }

  //--------------select photos -----------------------

    $photo = array();

	$ress=mysqli_query($db,"SELECT * FROM photos WHERE User_id='$id'");
	$nphotos =mysqli_num_rows($ress) ;
while($row1=mysqli_fetch_array($ress))
  {
	   array_push($photo,$row1['Photo_Path']);

}




////*************************** Get Rating profile ($id) from URL  ********************
$res=mysqli_query($db,"SELECT rating,Commentor_id FROM comments where (User_id= '$id') AND (Commentor_id!='$id')");
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
  else {$Mrating =0 ;}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
		    <script src="index.js"></script>
  </head>
	<style media="screen">

	.star-rating {
	  width: 0;
	  position: relative;
	  display:inline-block;
	  background-image: url(star_0.svg);
	  background-position: 0 0;
	  background-repeat: repeat-x;
	}

	.star-rating .star-value {
	position: absolute;
	height: 100%;
	width: 100%;
	background: url('star_1.svg') ;
	background-repeat: repeat-x;
	}
	#rater{
	  margin-left: 721px;
	      top: 12px;
	  }
	</style>

  <body>


 <?php include('topbar.php'); ?>
<div id="container" >
<div id="square1">


   <?php echo' <img id="pic"  src="imgs/'.$Profile_Pic.'"  alt="" onclick="slide(this.src)" class="pictures" > '; ?>

    <strong id="name" ><?php echo $First_Name .' '. $Last_Name ; ?> </strong>

    <div class="rating">
<?php
 echo "<div class='ratingcontain'>";
     for ($j=1;$j<=$Mrating;$j++)
	 echo '<span class="fa fa-star checked"></span>' ;
      if ($Mrating<5)
      for($j=$Mrating;$j<5;$j++)
     echo ' <span class="fa fa-star"></span>' ;
       echo "</div>";
?>

    </div>

    <div class="infocontainer">

			<div class="info">
				<span class="fas fa-briefcase" style="font-family: 'FontAwesome';margin-right: 10px;color: #036fa1;"></span>
			      <span><?php echo $Job ; ?></span>
			    </div>

			    <div class="info">
						<span class="fas fa-map-marker" style="font-family: 'FontAwesome';margin-right: 10px;font-size: 18px;color: #036fa1;"></span>
			      <span><?php echo $Wilaya.", ".$Daira.", ".$Commune ; ?></span>
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
	 if($nphotos>3){for($j=0;$j<3;$j++){
	echo '<img src="imgs/'.$photo[$j].'" alt="" class="imgs" onclick="slide(this.src)">';

}
	}
else if(($nphotos<=3) && ($nphotos>0)){
	for($j=0;$j<$nphotos;$j++){
	echo '<img src="imgs/'.$photo[$j].'" alt="" class="imgs" onclick="slide(this.src)">';

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
      echo '<img src="imgs/'.$photo[$j] .'" id="'.$photo[$j] .'" alt="" class="imgs pictures" onclick="slide(this.src)" >';
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
<a class="prev" id="prev" onclick="prev()">&#10094;</a>
<a class="next" id="next" onclick="next()">&#10095;</a>
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

   echo' <div class="yourcomment"> ';
  echo'  <img src="imgs/'.  $Profile_Pic    .'" class="commentimg" alt="" id="yourcommentpic" style="position: absolute;" > ';
   echo'    <form action="profile.php" method="post">   ';
  echo' <input type="text" name="Comment"  id="input1">';
	echo '  <div id="rater"></div> ';
  echo '<input type= "hidden"  name="Commentor_id"  value="'.$Commentor_id.'" >   ';
  echo '<input type= "hidden"  name="User_id"  value="'.$id.'" >   ';
  echo '<input type= "hidden"  name="rating"  value="" id="ratings" >   ';
  echo' <input type="submit" name="commenter" value="commenter" id="submitreview" hidden></div>
<label for="submitreview" class="fa fa-send" id="submitreview2"></label>';
                echo'   </form>    ';


  }

  //------------------------------for show all comments------------------
$User_id=$id ;
$res=mysqli_query($db,"SELECT * FROM comments WHERE User_id='$id'");

while($row=mysqli_fetch_array($res))
  {

$Commentor_id=$row['Commentor_id'] ;
$rating=$row['rating'];
$rest=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name FROM users WHERE id='$Commentor_id' ");

while($row1=mysqli_fetch_array($rest))
       {

		 $Profile_Pic=$row1['Profile_Pic'] ;
		 $Last_Name=$row1['Last_Name'] ;
		 $First_Name=$row1['First_Name'] ;


              }


   echo ' <div class="commentsection"> ';
   echo ' <div class="comment"> ' ;
   echo '<a href="profile.php?id='.$Commentor_id.'" style="text-decoration: none; color: black;">   <img class="commentimg" src="imgs/'.   $Profile_Pic   .' " alt="" onerror="error(this)"> </a>' ;
   echo '<a href="profile.php?id='.$Commentor_id.'" style="text-decoration: none; color: black;">  <span class="cousername">'. $First_Name.'  '.$Last_Name  . '</span> </a>'  ;

if($Commentor_id != $id)
  {
echo "<div class='ratingcontain3'>";
	 for ($j=1;$j<=$row['rating'];$j++)
	 echo '<span class="fa fa-star checked"></span>' ;
      if ($row['rating']<5)
      for($j=$row['rating'];$j<5;$j++)
     echo ' <span class="fa fa-star unchecked"></span>' ;
  echo "</div>";  }
   echo ' <br> ' ;

   echo ' <span class="commenttxt">  ' .  $row['Comment']  .'       </span> </div> </div> ' ;



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



 var myRating = raterJs( {
    element:document.querySelector("#rater"),
    rateCallback:function rateCallback(rating, done) {
      this.setRating(rating);
      document.getElementById("ratings").value= myRating.getRating();
      done();
    }
 });




 </script>
</html>
