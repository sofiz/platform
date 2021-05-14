

<?php


session_start();
include('../conn.php');



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



if (isset($_POST['submitpost'] ) && !empty($_POST['posttextarea'])){

$posttextarea = $_POST['posttextarea'];



    
    $Date = date("m.d.y");
    $Time = date("H:i"); 





$User=$_SESSION['Username'];
$res=mysqli_query($db,"SELECT id FROM users WHERE Username='$User'");
while($row=mysqli_fetch_array($res)){
$id=$row['id'] ;
        }


$query = "INSERT INTO posts (Txt,User_id,Date,Time,Myprofile) VALUES('$posttextarea', '$id', '$Date', '$Time','yes') ";
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


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="favicon.ico">
    <meta charset="utf-8">
    <title>Rondili - حسابي</title>
    <meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي">
    <meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
    <meta name="author" content="rondili">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <link rel="stylesheet" href="posts.css">

    <script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">



  </head>


<?php



$sSQL= 'SET CHARACTER SET utf8';
mysqli_query($db,$sSQL)
or die ('can\'t charset in DataBase');

include('calsses and functions .php') ;

$c = new  user();
if (!($c->Check_Session_Isset())) {
header('location: signin.php');
              }



$c->id = $c->Get_Id_From_Session($db);
///**********************************Get information of profile **********************
$c->Select_Information_Of_Profile($db);
//--------------select photos -----------------------
$c->Select_Photos_Of_Profile ($db);
////*************************** Get Rating profile ($id) from URL  ********************
$c->Get_Rating_Profile($db);
include('topbar.php');

//---COUNT PROFILE VISITs ----
if (isset($_SESSION['Username'])) {
$Username=$_SESSION['Username'];
$q ="UPDATE statistics set Myprofile=Myprofile+1 WHERE Username='$Username' ";
mysqli_query($db, $q);
}


?>

  <body>





<div id="container" >
<div id="square1">


   <?php if ($c->Profile_Pic!="default.png") echo '<img id="pic" class="pictures" src="imgs/'.$c->id.'/'.$c->Profile_Pic .'" alt="" onclick="slide(this.src)">';


            else  echo '<img id="pic" src="imgs/default.png" alt="" class="pictures" onclick="slide(this.src)">'; ?>



    <strong id="name" ><?php echo $c->First_Name .' '. $c->Last_Name ; ?> </strong>

    <div class="rating">
 <?php
 $c->Show_Rating();
?>



    </div>

    <div class="infocontainer">
      <div class="co">

      <div class="info">
        <?php if ($c->Job!="" && $c->Type == "worker" )
        {
          echo '	<span class="material-icons" style="    margin-right: 10px;
     color: #ffffff;
     background: #0096c7;
     padding: 5px;
     border-radius: 18px;
     font-size: 19px;">
 business_center
 </span> ';
            echo '<span style="font-size: 15px;">'.  $c->Job .'</span> ';
         }
         else { echo '<span style="font-size: 15px;"> </span> ';   }
         ?>


          </div>

          <div class="info">
            <?php	if ($c->Wilaya!="" && $c->Type == "worker")
         {
     echo '<span class="fas fa-map-marker" style="font-family: FontAwesome;margin-right: 10px;font-size: 18px;color: #ffffff;background: #e64e4e;padding: 5px 9px;border-radius: 18px;"></span>
  ' ;
     if(empty($c->Daira)&&empty($c->Commune))
         echo '<span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$c->Wilaya.'</span>';
         if(!empty($c->Daira)&&empty($c->Commune))
         echo '<span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$c->Wilaya.','.$c->Daira.'</span>';
    if(!empty($c->Daira)&&!empty($c->Commune))
         echo '<span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$c->Wilaya.','.$c->Daira.','.$c->Commune.'</span>';

     }
      else { echo '<span style="font-size: 15px;"> </span> ';   }
    ?>
          </div>

          <div class="info">
            <?php	if ($c->Phone!="" && $c->Type == "worker") {
          echo ' <span class="fas fa-phone" style="font-family: FontAwesome;margin-right: 10px;font-size: 18px;color: white;background: #54c554;padding: 5px 7px;border-radius: 18px;top: 2px;position: relative;"></span>
  ' ;
              echo ' <span>  '.$c->Phone. ' </span> ';
          }
          else { echo '<span style="font-size: 15px;"> </span> ';   }
          ?>
          </div>

    <div class="info">
      <?php	if ($c->Type == "worker" && $c->EmailCheck=="yes") {
      echo '<span class="fas fa-envelope" style="font-family: FontAwesome;margin-right: 10px;font-size: 14px;color: white;background: #9f54c5;;padding: 6px 7px;border-radius: 18px;top:0px;position: relative;"></span> ' ;
            echo ' <span> '.$c->Email .'</span> ';
    }
    else if (($c->EmailCheck=="no" && $c->Type == "worker")){
      echo '<span class="fas fa-envelope" style="font-family: FontAwesome;margin-right: 10px;font-size: 14px;color: white;background: #9f54c5;;padding: 6px 7px;border-radius: 18px;top: 0px;position: relative;"></span> ' ;
      echo '<span style="font-size: 15px;"> - </span> ';   }
      else {//echo '<span class="fas fa-envelope" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;"></span> ' ;
             echo '<span>  </span> ';}

    ?>
    </div>



  <?php  if($c->Birthday !=  "0000-00-00" && $c->Age($c->Birthday) > 16  && $c->Age($c->Birthday) < 65 && $c->Type == "worker")
    {
      echo ' <div class="info"> <span class="fas fa-birthday-cake" style="font-family: FontAwesome;margin-right: 10px;color: white;background: #FF9800;padding: 6px;border-radius: 18px;"></span> ';
        echo '<span>  ' . $c->Age($c->Birthday)  .'</span> </div>';
    }

  elseif(($c->Birthday ==  "0000-00-00" || ($c->Age($c->Birthday) < 16  || $c->Age($c->Birthday) > 65)) && $c->Type == "worker") {
      echo ' <div class="info"> ';
     echo ' <span class="fas fa-birthday-cake" style="font-family: FontAwesome;margin-right: 10px;color: white;background: #FF9800;padding: 6px;border-radius: 18px;"></span> ';
        echo '<span> - </span> </div>';
    }
  else  echo '<div class="info"><span> </span> </div>';

  ?>

    </div>
    <div class="descript">

 <span  id="descriptiontxt"><?php echo $c->Description ; ?></span>

 </div>
</div>
    <div id="profileeditbtnp">
<a class="btn1" href="profile_edit.php" style="color:#ffffffeb;">تعديل الحساب</a>
</div>
</div>
<div class="s1s2">


<!--
<div id="square3">
    <strong id="photostitle" class="titles">الصور</strong>
    <div class="photocontainer">
	<?php
	//$c->Show_Three_Photos();
	 ?>
    </div>
    <button id="viewallpic" type="button" name="button">مشاهدة الكل </button>
</div>

-->
</div>

<?php   if (isset($_SESSION['Username'])) { ?>
	
<div class="newpostcontain">


	<form action="my-profile.php" method="post" enctype="multipart/form-data">






      <textarea name="posttextarea" class="posttextarea" placeholder="write your text here"></textarea>
      <input type="file" name="upload[]" class="button" id="upload" multiple>
     




        <!-- <button type="button" name="upload" class="button" id="upload">upload</button> -->







     
      <div class="filterscontain">
      
        <button type="submit" name="submitpost" class="button" id="submitpost">نشر</button>

      </div>



	   </form>
</div>



<?php }
   ?>


<div>
<?php


echo '<form action="profile.php?id='.$c->id.'" method="post" enctype="multipart/form-data">' ;
echo '<div> ' ;

    $res=mysqli_query($db,"SELECT * FROM posts where User_id='$c->id'");
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
	if($Profile_Pic!="default.png") { echo ' <img src="imgs/'.$User_id.'/'.$Profile_Pic.'" alt="">'; }
    
	else echo '<img src="imgs/default.png" alt=""> ';
	
	echo '<h3>'.$row['Date'].' '.$row['Time'].'</h3>' ;
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
echo '<input type="text" name="'.$Post_id.'" class="inputcom"> ';

echo '<button type="submit" name="submitcomment" class="submitcom" value="'.$Post_id.'"><i class="fa fa-paper-plane" aria-hidden="true"></i>  </button>';

echo '</div>' ;




}

echo '</div>' ;
}


	   echo '</form>' ;
?>
</div>


<!--
<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="photocontainermodal">
    <?php

     //$c->Show_All_Photos();

	 ?>

    </div>
  </div>


</div>
-->

<!-- Trigger the Modal -->
<img id="myImgx" src="" alt="" hidden>

<!-- The Modal -->
<div id="myModalx" class="modalx">

  <!-- The Close Button -->
  <span class="closex">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-contentx" id="img01">

  <!-- Modal Caption (Image Text) -->
  <a class="prev" id ="prev" onclick="prev()">&#10094;</a>
  <a class="next" id = "next" onclick="next()">&#10095;</a>
</div>


<div class="square4">
  <strong class="titles">التقييمات</strong>
<?php

//-------------for my comment------------
$c->For_My_Comment($db);
//-----------for show all comments-------
$c->Show_All_Comments($db);





mysqli_close($db);

?>
</div>

</div>

  </body>



  <script type="text/javascript">

  var imgs_path = "http://localhost/imgs/"

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
    modalx.style.display = "flex";
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
  s=[];
  for (p in pictures){
  s.push(pictures[p].src)
  }
  s.remove(undefined);
  number_of_pics = s.length - 1;

  if (number_of_pics<3) {
    document.getElementById('viewallpic').style.display='none';
  }

  function slide(e){

  pictures = document.getElementsByClassName("pictures");
  s=[];
  for (p in pictures){
  s.push(pictures[p].src)
  }
  s.remove(undefined);
  console.log("s="+s);
  n = s.indexOf(e);
  n= Number(n);
  console.log("n="+n);
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
  console.log("L="+l);
  console.log("n="+n);

  if (n==0 && l!=0){

    d.style.display = "none";
    nx.style.display = "block";
  }
  else if (n==0 && l==0){

    d.style.display = "none";
    nx.style.display = "none";
  }

  else if (n==l && n!=0){
    nx.style.display = "none";
    d.style.display = "block";
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


  function optionscom(id) {
  var btncomid= 'DeleteCommentlab'+ id ;
  if (document.getElementById(btncomid).style.display=='block') {
  document.getElementById(btncomid).style.display= 'none';

  }
  else {
  document.getElementById(btncomid).style.display= 'block';
  }


  }
  // When the user clicks anywhere outside of the modal, close it

  var elements = document.getElementsByClassName('deletecomlab');


  $('body').click(function() {
      for (let i = 0; i < elements.length; i++) {
          elements[i].style.display= 'none';
      }


  });

  $('.deletecom').click(function(event){
      event.stopPropagation();
  });


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
