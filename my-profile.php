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
    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="profile.js"></script>
    <script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">



  </head>


<?php

session_start();
include('../conn.php');

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


if (isset($_SESSION['Username'])) {
$Username=$_SESSION['Username'];
$q ="UPDATE statistics set Myprofile=Myprofile+1 WHERE Username='$Username' ";
mysqli_query($db, $q);
}


?>

  <body>





<div id="container" >
<div id="square1">


   <?php if ($c->Profile_Pic!="default.png")echo '<img id="pic" src="imgs/'.$c->id.'/'.$c->Profile_Pic .'" alt="" >';


            else  echo '<img id="pic" src="imgs/default.png" alt="" >'; ?>



    <strong id="name" ><?php echo $c->First_Name .' '. $c->Last_Name ; ?> </strong>

    <div class="rating">
 <?php
 $c->Show_Rating();
?>



    </div>

    <div class="infocontainer">

      <div class="info">
				<?php if ($c->Job!="" && $c->Type == "worker" )
				{
				 echo '<span class="fas fa-briefcase" style="font-family: FontAwesome;margin-right: 10px;color: #036fa1;"></span> ' ;
			     echo '<span style="font-size: 15px;">'.  $c->Job .'</span> ';
				 }
				 else { echo '<span style="font-size: 15px;"> </span> ';   }
				 ?>
			    </div>

			    <div class="info">
						 <?php	if ($c->Wilaya!="" && $c->Type == "worker")
         {
		 echo '<span class="fas fa-map-marker" style="font-family: FontAwesome;margin-right: 10px;font-size: 18px;color: #036fa1;"></span>' ;
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
					echo ' <span class="fas fa-phone" style="font-family: FontAwesome;margin-right: 10px;font-size: 18px;color: #036fa1;"></span>' ;
			        echo ' <span>  '.$c->Phone. ' </span> ';
				  }
				  else { echo '<span style="font-size: 15px;"> </span> ';   }
				  ?>
			    </div>

    <div class="info">
			<?php	if ($c->Type == "worker" && $c->EmailCheck=="yes") {
			echo '<span class="fas fa-envelope" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;"></span> ' ;
            echo ' <span> '.$c->Email .'</span> ';
	  }
	  else if (($c->EmailCheck=="no" && $c->Type == "worker")){
          echo '<span class="fas fa-envelope" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;"></span> ' ;
		  echo '<span style="font-size: 15px;"> لا يوجد ايميل </span> ';   }
		  else {//echo '<span class="fas fa-envelope" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;"></span> ' ;
		         echo '<span>  </span> ';}

	  ?>
    </div>



<?php  if($c->Birthday !=  "0000-00-00" && $c->Age($c->Birthday) > 16  && $c->Age($c->Birthday) < 65 && $c->Type == "worker")
    {
	    echo ' <div class="info"> <span class="fas fa-birthday-cake" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;"></span> ';
        echo '<span>  ' . $c->Age($c->Birthday)  .'</span> </div>';
    }

	elseif(($c->Birthday ==  "0000-00-00" || ($c->Age($c->Birthday) < 16  || $c->Age($c->Birthday) > 65)) && $c->Type == "worker") {
	    echo ' <div class="info"> ';
		 echo ' <span class="fas fa-birthday-cake" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;"></span> ';
        echo '<span> لايوجد العمر </span> </div>';
    }

?>


    </div>
    <div id="profileeditbtnp">
<a class="btn1" href="profile_edit.php" style="color:#ffffffeb;">تعديل الحساب</a>
</div>
</div>
<div class="s1s2">


<div id="square2">

<strong class="titles">الوصف</strong>
  <div class="description">

    <span><?php echo $c->Description ; ?></span>
  </div>

</div>

<div id="square3">
    <strong id="photostitle" class="titles">الصور</strong>
    <div class="photocontainer">
	<?php
	$c->Show_Three_Photos();
	 ?>
    </div>
    <button id="viewallpic" type="button" name="button">مشاهدة الكل </button>
</div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="photocontainermodal">
    <?php

$c->Show_All_Photos();

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
  </script>
</html>
