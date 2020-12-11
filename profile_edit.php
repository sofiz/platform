
<?php 
session_start();
include('conn.php'); 
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
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Edit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="data.js"></script>
<link rel="stylesheet" href="search.css">
<link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>

<body>

 <?php include('topbar.php'); ?>
<form class="f" action="onsbmit.php" method="post"  enctype="multipart/form-data" >


<div id="container1" >
<div id="square1">

<div class="" style="border-radius: inherit;">
  <img id="pic"  src="imgs/<?php   echo  $c->Profile_Pic; ?>" alt="" >




  <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL1(this);" hidden>
  <label for="fileToUpload" id="uploadbtn" class="fa fa-user" ></label>
  </div>

  <input type="text" name="First_Name" value="<?php echo $c->First_Name ; ?>" class="inputname" >
  <input type="text" name="Last_Name" value="<?php echo $c->Last_Name ;?>" class="inputname" id="inputname2">


  <div class="infocontain2">

		<div class="info2">
	    <select type="text" name="Job" style="margin-top: -4px;
    margin-bottom: 16px;
    margin-left: 0;
    width: max-content;"  class="dropdown2">
<option value="<?php  echo$c->Job ?>"> <?php  echo$c->Job ?></option>
       <option value="بناء">بناء</option>
	   <option value="لحام">لحام</option>
	   <option value="ميكانيك السيارات">ميكانيك السيارات</option>
	   <option value="دهان">دهان</option>
	   <option value="خياطة">خياطة</option>
	   <option value="تصليح الاحدية">تصليح الاحدية </option>
	   <option value="نجار">ةنجار</option>
	   <option value="حلاقة رجال">حلاقة رجال</option>
	   <option value="كهرباء عماربة">كهرباء معماربة  </option>
	   <option value="حدادة">الحدادة</option>
	   <option value="تركيب الصحي والغاز">التركيب الصحي والغاز</option>
	   <option value="التدفئة المركزية">التدفئة المركزية</option>
<option value="المنيوم و المواد البلاستيكية">نجارة الالمنيوم و المواد البلاستيكية </option>
<option value="المطالة هياكل السيارات">المطالة هياكل السيارات</option>
<option value=" التأثيث الداخلي للمركبات">التجهيز و التأثيث الداخلي للمركبات</option>
<option value="كهرباء السيارات">كهرباء السيارات</option>

</select>
	  </div>

 <div id="dropdowns" style="position: relative;
    top: 15px;
    left: -10px;" ></div>

 <div class="info2">
	 <input type="text" name="Phone" value="<?php echo $c->Phone ?>" class="inputinf">
 </div>

  <div class="info2">
    <input type="text" name="Email" value="<?php echo $c->Email ?>" class="inputinf">
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
    <input type="text" name="Birthday" value="<?php echo $c->Birthday ; ?>" class="inputinf">
  </div>


  </div>
</div>

<script>

//************************** for wilaya *******************


var myParent = document.getElementById("dropdowns")
//Create and append select list
var selectList = document.createElement("select");
selectList.id = "mySelectwilaya";
myParent.appendChild(selectList);
document.getElementById("mySelectwilaya").classList.add('dropdown2');

//*************** default ********
var option = document.createElement("option");
    option.value = "" ;
	option.text = document.getElementById("Wilaya").value ;
	selectList.appendChild(option);
//Create and append the options




for (i in arr.wilayas) {


   var option = document.createElement("option");
    option.value = i ;
    option.text = arr.wilayas[i].name_ar;

    selectList.appendChild(option);


}
document.getElementById("mySelectwilaya").options[0].disabled = true;
/////****************************** for daira ***************
var myParent2 = document.getElementById("dropdowns")
//Create and append select list
var selectList2 = document.createElement("select");
selectList2.id = "mySelectdaira";
myParent2.appendChild(selectList2);
document.getElementById("mySelectdaira").classList.add('dropdown2');



//*************** default ********
var option = document.createElement("option");
    option.value = "" ;
    option.text =document.getElementById("Daira").value ;

	selectList2.appendChild(option);



 var wilayacode;
 var dairacode ;


  $(document).ready(function(){


    $("#mySelectwilaya").change(function(){
        wilayacode = $(this).children("option:selected").val();
		//********* set value of wilaya in input ********

		document.getElementById("Wilaya").value= arr.wilayas[wilayacode].name_ar;

        //alert("You have selected wilaya - " + wilayacode);

        $('#mySelectdaira').find('option:not(:first)').remove();
		$('#mySelectcommune').find('option:not(:first)').remove();

		for (j in arr.wilayas[wilayacode].dairas) {
		var option = document.createElement("option");
	option.value = j ;
    option.text = arr.wilayas[wilayacode].dairas[j].name_ar ;


    selectList2.appendChild(option);
           }

document.getElementById("mySelectdaira").options[0].disabled = true;
		   });   });

		   //****************************** for communes *******************
		   var myParent3 = document.getElementById("dropdowns")
//Create and append select list
var selectList3 = document.createElement("select");
selectList3.id = "mySelectcommune";
myParent3.appendChild(selectList3);
document.getElementById("mySelectcommune").classList.add('dropdown2');


//*************** default ********
var option = document.createElement("option");
    option.value = "" ;
    option.text = document.getElementById("Commune").value ;
	selectList3.appendChild(option);


	$(document).ready(function(){


    $("#mySelectdaira").change(function(){
        var dairacode = $(this).children("option:selected").val();
        //alert("You have selected wilaya - " + dairacode);
		//********* set value of wilaya in input ********

		 document.getElementById("Daira").value= arr.wilayas[wilayacode].dairas[dairacode].name_ar;


        $('#mySelectcommune').find('option:not(:first)').remove();

		for (k in arr.wilayas[wilayacode].dairas[dairacode].communes) {
		var option = document.createElement("option");
	option.value = k ;
    option.text = arr.wilayas[wilayacode].dairas[dairacode].communes[k].name_ar ;
	if(option.text==document.getElementById("Commune").value) {option.selected = "selected";}

    selectList3.appendChild(option);
           }

document.getElementById("mySelectcommune").options[0].disabled = true;




		   $(document).ready(function(){


    $("#mySelectcommune").change(function(){
        var communecode = $(this).children("option:selected").val();

		//********* set value of wilaya in input ********

		 document.getElementById("Commune").value= arr.wilayas[wilayacode].dairas[dairacode].communes[communecode].name_ar;


});   });


		   });



		 });



	</script>

<div id="square2">


<div class="description">
  <strong>Description</strong>
  <br>
  <textarea type="text" name="Description" value="" class="descriptioninp"><?php echo $c->Description  ?></textarea>
</div>


</div>

<div id="square3">
<button type="button" id="picsbtn">Edit you photos</button>

  <!-- Trigger/Open The Modal -->

<strong id="photostitle" class="titles">Pictures</strong>

  <div class="photocontainer2">
		<?php
$c->Show_Three_Photos();
?>
  </div>


</div>

<div class="btns">

<a  href="my-profile.php" class="btn">
<i class="fa fa-times "></i>
<span>cancel</span>
</a>



<input type="submit" value="save" name="save" id="save">
<i class="fa fa-check icn"></i>

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

      <input type="file" name="uploadpic" id="uploadpic" onchange="readURL(this);"  hidden>
      <label for="uploadpic" id="uploadpicbtn" >Upload</label>


      <input type="button" name="savepics" value="savepics" id="b1" onclick="send()">
	  <input type="submit" id="b2" name="savepics" hidden>


    </div>
  </div>


</div>

<div id="results"></div>
<script>

var imgs_path = "http://localhost/platforme/imgs/"

document.getElementById('pic').onerror = function() {
	document.getElementById('pic').src = "imgs/default.png";}


var ids =[];
function myFunction(x) {
  var myobj = document.getElementById("pic"+x);
  myobj.remove();
  ids.push(x);
  /*$(document).ready(function(){
          $.ajax({
          type:"POST",
          url:"page.php",
          data:{ids:x},
          success:function(result){
          $("#results").html(result);
          }
          });
     });
     */
}

function send(){

$(document).ready(function(){
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
});
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("picsbtn");

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

$("#b1").click(function(){
    $("#b2").trigger('click');

})


function readURL(input) {
			 if (input.files && input.files[0]) {
					 var reader = new FileReader();

					 reader.onload = function (e) {
							 $('#blah')
									 .attr('src', e.target.result)
					 };

					 reader.readAsDataURL(input.files[0]);
			 }
	 }

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

</script>

</form>

</body>
</html>
