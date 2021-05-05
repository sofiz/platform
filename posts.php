<!DOCTYPE html>

<?php

include('../conn.php') ;
session_start();


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



if (isset($_POST['submitpost'])){

$posttextarea = $_POST['posttextarea'];



    $Job = $_POST['jobs'];
	$Wilaya = $_POST['Wilaya'];
	$Category = $_POST['offer'];






$User=$_SESSION['Username'];
$res=mysqli_query($db,"SELECT id FROM users WHERE Username='$User'");
while($row=mysqli_fetch_array($res)){
$id=$row['id'] ;
        }


$query = "INSERT INTO posts (Txt,User_id,Job,Wilaya,Category) VALUES('$posttextarea', '$id', '$Job', '$Wilaya', '$Category') ";
mysqli_query($db, $query);

$getmaxid = mysqli_query($db," SELECT MAX(Post_id) AS id FROM posts");
$rowx = mysqli_fetch_array($getmaxid);
$Post_id=$rowx["id"];



$x=0;
if(count($_FILES['upload']['name']) < 4 )
foreach($_FILES['upload']['name'] as $key=>$val){


	$x++;
	if ($_FILES['upload']['size'][$key] != 0 	&& $_FILES['upload']['size'][$key] < 6097152 ){


		if (!file_exists('imgs/'.$id)) {

    mkdir('imgs/'.$id, 0777, true);

}
	/////-------------------- Get id -------------------

$getmaxid = mysqli_query($db," SELECT MAX(Post_id) AS id FROM posts");
$row77 = mysqli_fetch_array($getmaxid);
$maxid=$row77["id"];

$maxid++;


$newname = "POST_".strval($id).strval($maxid).strval($x);


  $tar='imgs/'.$id.'/';
  //$tar=$tar.basename($_FILES['uploadpic']['name']) ;

  $extension = pathinfo($_FILES["upload"]["name"][$key], PATHINFO_EXTENSION);


  //$pic=($_FILES['uploadpic']['name']) ;
  $pic=$newname.".".$extension;


  $allowedTypes = array(IMAGETYPE_JPEG ,IMAGETYPE_PNG );

$detectedType = exif_imagetype($_FILES['upload']['tmp_name'][$key]);
$in = in_array($detectedType, $allowedTypes);
  if($in){


  $query = "UPDATE posts SET Photo_$x='$pic' where Post_id=$Post_id  ";
	if ($pic!=""){
  mysqli_query($db, $query);
			  //move_uploaded_file ($_FILES['uploadpic']['tmp_name'],$tar);

			  //compressImage($_FILES['uploadpic']['tmp_name'],$tar,60);
			  compressImage($_FILES['upload']['tmp_name'][$key],$tar.$newname.".".$extension,15);
			          }


  }
	}
  }






 }

if(isset($_POST['submitcomment'])){
$Post_id = $_POST['submitcomment'];
$Comment = mysqli_real_escape_string($db, $_POST[$Post_id]);
if (!empty($Comment)) {
	
	
$User=$_SESSION['Username'];
$res=mysqli_query($db,"SELECT id FROM users WHERE Username='$User'");
while($row=mysqli_fetch_array($res)){
$Commentor_id=$row['id'] ;
        }





$query = "INSERT INTO posts_comments (Post_id,Commentor_id,Comment) VALUES('$Post_id', '$Commentor_id', '$Comment') ";
mysqli_query($db, $query);

}

}



?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="data.js"></script>


    <title></title>
  </head>

  <?php
include('topbar.php');

?>
  <body>

    <div class="container">
<div class="newpostcontain">


	<form action="posts.php" method="post" enctype="multipart/form-data">






      <textarea name="posttextarea" class="posttextarea" placeholder="write your text here"></textarea>
      <input type="file" name="upload[]" class="button" id="upload" multiple>
      <div class="btnscontainer"> </div>




        <!-- <button type="button" name="upload" class="button" id="upload">upload</button> -->







      <div class="filterscontain">
        <div class="jobdrop">

          <select class="dropdown" name="jobs" id="jobs">
             <?php include 'jobsdata.html';?>
          </select>

        </div>



        <div  class="wilayadrop"  id="myDIV">
     <input type="text" name="Wilaya"  value="" class="searchbtn" id="Wilaya" hidden>
    </div>





		<input type="radio" name="offer" value="offer" class="radio">
        <div class="filtersradiotxt">
          <p style="margin-left:10px;width:73px">فرصة عمل</p>
        </div>

<input type="radio" name="offer" value="offer" class="radio">
        <div class="filtersradiotxt">
          <p style="margin-left:10px;width:79px">تقديم عمل</p>

        </div>
<input type="hidden" name="" value="">




        <button type="submit" name="submitpost" class="button" id="submitpost">نشر</button>

      </div>



	   </form>
</div>

<div class="postscontain">
<div class="poststitlediv">
  <strong class="poststitle">منشورات</strong>
</div>

	<form action="posts.php" method="post" enctype="multipart/form-data">

      <div class="filterscontain">
        <div class="jobdrop">

          <select class="dropdown" name="jobs" id="jobs">
             <?php include 'jobsdata.html';?>
          </select>

        </div>



     <div  class="wilayadrop"  id="myDIV2">
     <input type="hidden" name="Wilaya"  value="" class="searchbtn" id="Wilaya2" hidden>
     </div>





		<input type="radio" name="offer" value="offer" class="radio">
        <div class="filtersradiotxt">
          <p style="margin-left:10px;width:73px">فرصة عمل</p>
        </div>

<input type="radio" name="offer" value="offer" class="radio">
        <div class="filtersradiotxt">
          <p style="margin-left:10px;width:79px">تقديم عمل</p>
        </div>
		<button type="submit" name="sub" class="button" id="submitpost">بحث</button>
      </div>



<?php
    if (isset($_POST['sub']))
	{
	$Job = $_POST['jobs'];
	$Wilaya = $_POST['Wilaya'];
	$Category = $_POST['offer'];
	$res=mysqli_query($db,"SELECT * FROM posts where Job='$Job'  and Wilaya='$Wilaya' and Category='$Category' ");
	 echo  $Job;
	 echo  $Wilaya;
	 echo  $Category;
	 }
	else
    $res=mysqli_query($db,"SELECT * FROM posts ");

	while($row=mysqli_fetch_array($res)){

         echo '<div class="post"> ';

	      // get user info
		 $User_id = $row['User_id'];

		 $res1=mysqli_query($db,"SELECT * FROM users where id ='$User_id' ");
		 while($row1=mysqli_fetch_array($res1)){

		    $First_Name = $row1['First_Name'];
			$Last_Name = $row1['Last_Name'];
			$Profile_Pic = $row1['Profile_Pic'];
		 }



    echo '<div class="imgcontain">' ;
	if($Profile_Pic!="default.png")
    echo ' <img src="imgs/'.$User_id.'/'.$Profile_Pic.'" alt="">';
	else echo '<img src="imgs/default.png" alt=""> ';
    echo '</div>' ;

    echo '<div class="name">' ;
    echo ' <p class="nametxt">'.$First_Name .' '. $Last_Name . '</p>' ;
    echo ' </div> ' ;

    echo '<div class="posttxtdiv">';
    echo '<p class="posttxt">'.$row['Txt'].'</p>';
	
	
	
	
	 
if($row['Photo_1']!=""){
  echo '<div class="slideshow-container">  '; 
  echo '
   
    <div class="mySlides fade">
      <img class="imageslide" src="imgs/'.$User_id.'/'.$row['Photo_1'].'" style="width:100%">
    </div>
	 ';
	  }
	 
if($row['Photo_2']!="")
  echo '  <div class="mySlides fade">
      <img class="imageslide" src="imgs/'.$User_id.'/'.$row['Photo_2'].'" style="width:100%">

    </div>
	
	 ';
if($row['Photo_3']!="")
    echo '  <div class="mySlides fade">
      <img class="imageslide" src="imgs/'.$User_id.'/'.$row['Photo_3'].'" style="width:100%">
      </div>
	 ';
	 
if($row['Photo_2']!="")
echo '

    <a class="prev">&#10094;</a>
    <a class="next">&#10095;</a>
';

  echo ' <div style="text-align:center"> '; 
    if($row['Photo_1']!="")
    echo ' <span class="dot"></span>  ';
	if($row['Photo_2']!="")
    echo '<span class="dot" ></span>   '; 
	if($row['Photo_3']!="")
   echo ' <span class="dot" ></span>     '; 
	
	 echo '
  </div>
  ';
  
if($row['Photo_1']!="")
   echo '
  </div>

  ';

    echo '</div>' ;



         $Post_id = $row['Post_id'];
         $res2=mysqli_query($db,"SELECT * FROM posts_comments WHERE Post_id='$Post_id'");
		 while($row2=mysqli_fetch_array($res2)){
		    $Commentor_id= $row2['Commentor_id'];

			$res3=mysqli_query($db,"SELECT * FROM users where id ='$Commentor_id' ");
		    while($row3=mysqli_fetch_array($res3)){
		    $CFirst_Name = $row3['First_Name'];
			$CLast_Name = $row3['Last_Name'];
			$CProfile_Pic = $row3['Profile_Pic'];
			$Cid = $row3['id'];
			 }


		   echo '<div class="commentsection">';

		   echo '<div class="comimgconatin">';
		   if($CProfile_Pic!="default.png")
           echo '<img src="imgs/'.$Cid.'/'.$CProfile_Pic.'" alt="">';
		   else  echo '<img src="imgs/default.png" alt=""> ';

           echo '</div>';

		   echo '<div class="comname">';
           echo '<p class="comenametxt">'.$CFirst_Name .' '.$CLast_Name.'</p>';
           echo ' </div> ';

           echo ' <div class="comtext"> ';
           echo ' <p>'.$row2['Comment'].'</p> ';
           echo ' </div>';
           echo ' </div>';

		 }






if (isset($_SESSION['Username'])) {

$Username=$_SESSION['Username'];

$res4=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name,id FROM users WHERE Username='$Username'");
while($row4=mysqli_fetch_array($res4)){
  	             $MCProfile_Pic=$row4['Profile_Pic'] ;
				 $MCid = $row4['id'] ;
				 }

echo ' <div class="commentorsection">';

echo '<div class="comimgconatin">';

if($MCProfile_Pic!="default.png")
echo '<img src="imgs/'.$MCid.'/'.$MCProfile_Pic.'" alt=""> ';
else
echo '<img src="imgs/default.png" alt="">';

echo '</div>';
echo '<input type="text" name="'.$Post_id.'" class="inputcom" > ';

echo '<button type="submit" name="submitcomment" class="submitcom" value="'.$Post_id.'"><i class="material-icons">&#xe163;</i>  </button>';

echo '</div>' ;




}
echo '</div>' ;
}


?>


 </div>


	</form>
</div>


   <?php include 'wilayascript.html'; ?>
  </body>

  <script type="text/javascript">
  (function() {

    init(); //on page load - show first slide, hidethe rest

    function init() {

      parents = document.getElementsByClassName('slideshow-container');

      for (j = 0; j < parents.length; j++) {
        var slides = parents[j].getElementsByClassName("mySlides");
        var dots = parents[j].getElementsByClassName("dot");
        slides[0].classList.add('active-slide');
        dots[0].classList.add('active');
      }
    }

    dots = document.getElementsByClassName('dot'); //dots functionality

    for (i = 0; i < dots.length; i++) {

      dots[i].onclick = function() {

        slides = this.parentNode.parentNode.getElementsByClassName("mySlides");

        for (j = 0; j < this.parentNode.children.length; j++) {
          this.parentNode.children[j].classList.remove('active');
          slides[j].classList.remove('active-slide');
          if (this.parentNode.children[j] == this) {
            index = j;
          }
        }
        this.classList.add('active');
        slides[index].classList.add('active-slide');

      }
    }
  //prev/next functionality
    links = document.querySelectorAll('.slideshow-container a');

    for (i = 0; i < links.length; i++) {
      links[i].onclick = function() {
        current = this.parentNode;

        var slides = current.getElementsByClassName("mySlides");
        var dots = current.getElementsByClassName("dot");
        curr_slide = current.getElementsByClassName('active-slide')[0];
        curr_dot = current.getElementsByClassName('active')[0];
        curr_slide.classList.remove('active-slide');
        curr_dot.classList.remove('active');
        if (this.className == 'next') {

          if (curr_slide.nextElementSibling.classList.contains('mySlides')) {
            curr_slide.nextElementSibling.classList.add('active-slide');
            curr_dot.nextElementSibling.classList.add('active');
          } else {
            slides[0].classList.add('active-slide');
            dots[0].classList.add('active');
          }

        }

        if (this.className == 'prev') {

          if (curr_slide.previousElementSibling) {
            curr_slide.previousElementSibling.classList.add('active-slide');
            curr_dot.previousElementSibling.classList.add('active');
          } else {
            slides[slides.length - 1].classList.add('active-slide');
            dots[slides.length - 1].classList.add('active');
          }

        }

      }

    }
  })();
    </script>
</html>
