<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <title> Rondili -  تعديل الحساب</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي">
    <meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
    <meta name="author" content="rondili">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="data.js"></script>
<link rel="stylesheet" href="search.css">
<link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>

</head>

<?php

session_id("session1");
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

include('topbar.php');

$c->id = $c->Get_Id_From_Session($db);
///**********************************Get information of profile **********************
$c->Select_Information_Of_Profile($db);
//--------------select photos -----------------------
$c->Select_Photos_Of_Profile ($db);


if (isset($_SESSION['Username'])) {
$Username=$_SESSION['Username'];
$q ="UPDATE statistics set ProfileEdit=ProfileEdit+1 WHERE Username='$Username' ";
mysqli_query($db, $q);
}
?>


<body>
<?php
 if($c->Type !="worker") echo '<p class="msgclient"> املء المعلومات لتغيير الى حساب عامل</p>';
 ?>

 <form class = "d" action= "onsbmit.php" method="post"  >
 <?php   echo '<input type="text" name="id" value="'.$c->id.'" class="inputname" hidden>';?>
 <input type="submit" value="delete" name="delete" id="deleteprofile" hidden>
 <button id="resetpass" type="button"
onclick="window.location.href = 'enter_email.php';" hidden>
	 Click Here
</button>
 </form>

<?php //include('errors.php'); ?>


<button type="button" name="button" id="confirmdelete" hidden></button>

<form class="f" action="onsbmit.php" method="post"  enctype="multipart/form-data" >


<div id="container" >
<div id="square1a">

<div class="settings" id="settings">
	<div class="settings2">


	<div id="settingselements">
	<label for="resetpass" id="resetpasslab"> تحديث كلمة السر </label>
	<label for="confirmdelete" id="deleteprofilelab">حدف الحساب</label>
	</div>
	<button type="button" name="settingsbtn"  onclick="options()" class="settingsbtn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
	</div>
</div>
<div class="" style="border-radius: inherit;">

  <?php if ($c->Profile_Pic!="default.png")
  echo '<img id="pic" src="imgs/'.$c->id.'/'.$c->Profile_Pic .'" alt="" >';


    else  echo '<img id="pic" src="imgs/default.png" alt="" >'; ?>




  <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL1(this),Filevalidation0();" hidden>
  <label for="fileToUpload" id="uploadbtn" class="fa fa-user" ></label>
  </div>
<div class="nameinp">


  <input type="text" name="First_Name" value="<?php echo $c->First_Name ; ?>" class="inputname" placeholder="الاسم "required >
  <input type="text" name="Last_Name" value="<?php echo $c->Last_Name ;?>" class="inputname" placeholder="اللقب" id="inputname2" required>
</div>

  <div class="infocontain2">

		<div class="info2">
			<span class="fas fa-briefcase" style="font-family: 'FontAwesome';margin-right: 10px;color: #036fa1;"></span>
	    <select type="text" name="Job" id="jobinp"  class="dropdown2" required>
       <?php if($c->Job!="") { echo '<option value="'.$c->Job.'" selected>'.$c->Job.'</option>' ;  }
	         else { echo '<option id="mihna" value=""  selected>المهنة</option>';   }

			 include('jobsdata.html'); ?>


</select>
	  </div>

   <div id="dropdowns" style="position: relative;
    top: 15px;
    left: -10px;" >	<span class="fas fa-map-marker" style="font-family: 'FontAwesome';margin-right: 10px;font-size: 18px;color: #036fa1;margin-left: 11px;"></span></div>

 <div class="info2">
	 <span class="fas fa-phone" style="font-family: 'FontAwesome';margin-right: 10px;font-size: 18px;color: #036fa1;"></span>
	 <input type="text" name="Phone" value="<?php echo $c->Phone ;?>" class="inputinf" placeholder="رقم الهاتف" required>
 </div>





  <div class="info2" hidden>

   <?php echo ' <input type="text" name="Wilaya" id="Wilaya"  value="'.$c->Wilaya.'" class="inputinf" hidden>'; ?>
  </div>

  <div class="info2"hidden>
    <?php echo ' <input type="text" name="Daira" id="Daira"  value="'.$c->Daira.'" class="inputinf" hidden>'; ?>
  </div>
  <div class="info2"hidden>
    <?php echo ' <input type="text" name="Commune" id="Commune"  value="'.$c->Commune.'" class="inputinf" hidden>'; ?>
  </div>
  <div class="info2">

  <?php
  echo '<span class="fas fa-birthday-cake" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;"></span>   '   ;

  if($c->Birthday !="0000-00-00" && $c->Age($c->Birthday) > 16 && $c->Age($c->Birthday) < 65)
    {

    echo '  <label for="birthday" style="font-size: 15px;"> '.$c->Age($c->Birthday).'  </label>  '  ;

 }
//echo ' <input type="date" name="Birthday" id="birthday"  value="'.$c->Birthday.'"';
?>

 <?php echo '<input type="date" id="birthday" name="Birthday" value="'.$c->Birthday.'">'; ?>


  </div>

  </div>
		<button type="button" name="button" class="uploadpicbtn" id="moreedite">المزيد</button>
</div>

<?php include 'locationdata.html'; ?>


<div class="s1s2">


<div id="square2">


<div class="description2">
  <strong>الوصف</strong>
  <br>
  <textarea type="text" name="Description" value="" class="descriptioninp" placeholder="أيام العمل ,الأسعار ,طريقة العمل ....إلخ" ><?php echo $c->Description  ?></textarea>
</div>


</div>

<div id="square3">
<button type="button" id="picsbtn">تعديل الصور</button>

  <!-- Trigger/Open The Modal -->

<strong id="photostitle" class="titles">الصور</strong>

  <div class="photocontainer">
		<?php
$c->Show_Three_Photos();
?>
  </div>


</div>
</div>

<div class="btns">

<a  href="my-profile.php" class="btn">
<i class="fa fa-times "></i>
<span>الغاء</span>
</a>



<input type="submit" value="حفظ" name="save" id="save">

</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="photocontainermodal">
    <?php

	// -------------show photos in window and save (Photos_ids) in array if user click on X -----------------------
	$c->Show_All_Photos_In_Edit();
	 ?>

    </div>
    <div class="piceditbtn">

      <input type="file" name="uploadpic[]"  id="uploadpic" onchange="readURL(this),Filevalidation1();"   hidden  multiple>


      <label for="uploadpic" class="uploadpicbtn" >تحميل</label>


      <input type="button" name="savepics" value="حفظ الصور" id="b1" onclick="send()">

	  <input type="submit" id="b2" name="savepics" hidden>


    </div>
  </div>


</div>




<!-- The Modal -->
<div id="myModalconfirm" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="closeconfirm">&times;</span>

		<div class="confirmcontainer">
			<p>هل أنت متأكد من حذف حسابك الى الأبد ؟</p>
			<button type="button" name="button" class="uploadpicbtn" id="confirmbtn">نعم</button>
		</div>

  </div>


</div>


<!-- The Modal -->
<div id="myModalmoreedit" class="modal">

  <!-- Modal content -->
  <div class="modal-content2">
    <span class="closemoreedit">&times;</span>

		<div class="moreeditecontainer">
			<div class="info2">

			<span class="fas fa-envelope" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;position:relative;top:5px;"></span>
<input type="checkbox" id="emailcheck" name="EmailCheck" value="yes" title="إظهار الايمايل في الحساب" style="margin-left: -10px;
    position: relative;
    top: 5px;" <?php  if($c->EmailCheck=="yes" )echo "checked"?>>
<input type="text" name="Email" placeholder="ايمايل" value="<?php echo $c->Email ;?>" class="inputinf2" style="width:79%" required>
</div>

<div class="info2">

<span class="fas fa-facebook-square" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;position:relative;top:5px;"></span>
<input type="text" name="Facebook" placeholder="رابط حساب فايسبوك" value="<?php echo $c->Facebook ;?>" class="inputinf2" style="width:79%;margin-left:13px;">
</div>

<div class="info2">

<span class="fas fa-instagram" style="font-family: FontAwesome ;margin-right: 10px;color: #036fa1;position:relative;top:5px;"></span>
<input type="text" name="Instagram" placeholder="رابط حساب انستغرام" value="<?php echo $c->Instagram ;?>" class="inputinf2" style="width:79%;margin-left:13px;">
</div>



		</div>

  </div>


</div>
<?php mysqli_close ( $db ); ?>
<div id="results"></div>
<script>

var imgs_path = "http://localhost/imgs/"

document.getElementById('pic').onerror = function() {
document.getElementById('pic').src = "imgs/default.png";}

var ids =[];
function myFunction(x) {
  var myobj = document.getElementById("pic"+x);
  myobj.remove();
  ids.push(x);
}

function send(){

$(document).ready(function(){
	if(ids.length>0){
ids = JSON.stringify(ids);
$.ajax({
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    type: "POST",
    url: "page.php",
    data: ids,
    traditional: true,
    success: function () {
    $('#results').html('"PassThings()" successfully called.');
    },

});

 }

});
}

// Get the modal
var modal1 = document.getElementById("myModal");

// Get the button that opens the modal
var btn1 = document.getElementById("picsbtn");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";

  }
}


// Get the modal
var modal = document.getElementById("myModalconfirm");

// Get the button that opens the modal
var btn = document.getElementById("confirmdelete");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeconfirm")[0];

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
var modal2 = document.getElementById("myModalmoreedit");

// Get the button that opens the modal
var btn2 = document.getElementById("moreedite");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("closemoreedit")[0];

// When the user clicks the button, open the modal
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal2.style.display = "none";

  }
}


$("#b1").click(function(){
    $("#b2").trigger('click');

})

$("#confirmbtn").click(function(){
    $("#deleteprofile").trigger('click');

})

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img class="imgs2" id="'+ i +'" >')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);



                }

                reader.readAsDataURL(input.files[i]);
				/*
				var source_image = document.getElementById(i);
                var quality = 30;
	            i.src = jic.compress(source_image,quality,output_format).src;
				*/


            }




        }

    };

    $('#uploadpic').on('change', function() {
        imagesPreview(this, '.photocontainermodal');
    });
});





/*

			 if (input.files && input.files[0]) {
					 var reader = new FileReader();

					 reader.onload = function (e) {
							 $('#blah')
									 .attr('src', e.target.result)
					 };

					 reader.readAsDataURL(input.files[0]);
			 }
	 }
	 */

	 function readURL1(input) {
	 			 if (input.files && input.files[0]) {
	 					 var reader = new FileReader();

	 					 reader.onload = function (e) {
	 							 $('#pic')
	 									 .attr('src', e.target.result)
	 					 };

	 					 reader.readAsDataURL(input.files[0]);
	 			 }
	 	 }
var settingselements = document.getElementById('settingselements');
var settingselementsclick = document.getElementById('settingselementsclick');
function options(){
	var settingselements = document.getElementById('settingselements');
	if (settingselements!=null) {
			settingselements.id = "settingselementsclick";
	}
	else{
	document.getElementById('settingselementsclick').id = "settingselements";
}
}

    Filevalidation1 = () => {
        const fi = document.getElementById('uploadpic');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {

                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 4096) {
                    location.reload();
                }
            }
        }
    }


	Filevalidation0 = () => {
        const fi = document.getElementById('fileToUpload');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {

                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 4096) {
                    location.reload();
                }
            }
        }
    }

		// When the user clicks anywhere outside of the modal, close it
		$(window).click(function() {
			if (document.getElementById('settingselementsclick')!=null) {
				document.getElementById('settingselementsclick').id = "settingselements";
			}

		});

		$('#settings').click(function(event){
		    event.stopPropagation();
		});
document.getElementById('mihna').remove();
</script>



</form>

</body>
</html>
