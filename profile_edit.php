
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
  <title>تعديل الحساب</title>
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

<body>

 <?php include('topbar.php'); ?>

 <form class = "d" action= "onsbmit.php" method="post"  >
 <?php   echo '<input type="text" name="id" value="'.$c->id.'" class="inputname" hidden>';?>
 <input type="submit" value="delete" name="delete" id="deleteprofile" hidden>
 <button id="resetpass" type="button"
onclick="window.location.href = 'enter_email.php';" hidden>
	 Click Here
</button>
 </form>

<?php //include('errors.php'); ?>




<form class="f" action="onsbmit.php" method="post"  enctype="multipart/form-data" >


<div id="container" >
<div id="square1a">

<div class="settings" >
	<div class="settings2">


	<div id="settingselements">
	<label for="resetpass" id="resetpasslab"> تحديث كلمة السر </label>
	<label for="deleteprofile" id="deleteprofilelab">حدف الحساب</label>
	</div>
	<button type="button" name="settingsbtn" id="settingsbtn" onclick="options()"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
	</div>
</div>
<div class="" style="border-radius: inherit;">
  <img id="pic"  src="imgs/<?php echo $c->id.'/'. $c->Profile_Pic; ?>" alt="" >




  <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL1(this),Filevalidation0();" hidden>
  <label for="fileToUpload" id="uploadbtn" class="fa fa-user" ></label>
  </div>
<div class="nameinp">


  <input type="text" name="First_Name" value="<?php echo $c->First_Name ; ?>" class="inputname" >
  <input type="text" name="Last_Name" value="<?php echo $c->Last_Name ;?>" class="inputname" id="inputname2">
</div>

  <div class="infocontain2">

		<div class="info2">
	    <select type="text" name="Job" id="jobinp"  class="dropdown2">
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
  
  <label for="birthday"> <?php echo $c->Age($c->Birthday); ?> </label>
  
   <input type="date" id="birthday" name="Birthday">
   
   
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
    option.value = "";
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
  
	if ( document.getElementById("Daira").value === ""  ) {
		option = document.createElement("option");
		option.text = "إختر دائرة" ;
        option.value = "" ;  
        option.selected = "selected";
		selectList2.appendChild(option);

}
   else { 
          option = document.createElement("option");
          option.text = "إختر دائرة" ;
          option.value = "" ;  
		  option.selected = "selected";
		  selectList2.appendChild(option);
		  
		  option = document.createElement("option");
          option.text = document.getElementById("Daira").value ;
	      option.value = document.getElementById("Daira").value ;
		  option.selected = "selected";
		  selectList2.appendChild(option);

		  }
	
document.getElementById("mySelectdaira").options[0].disabled = true;

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
		
		document.getElementById("mySelectdaira").options[0].selected = "selected";
        document.getElementById("mySelectcommune").options[0].selected = "selected";
		
		document.getElementById("Daira").value="";
		document.getElementById("Commune").value="";
		
		for (j in arr.wilayas[wilayacode].dairas) {
		var option = document.createElement("option");
	option.value = j ;
    option.text = arr.wilayas[wilayacode].dairas[j].name_ar ;
    selectList2.appendChild(option);
           }


		   });   
		   });

		   //****************************** for communes *******************
		   var myParent3 = document.getElementById("dropdowns")
//Create and append select list
var selectList3 = document.createElement("select");
selectList3.id = "mySelectcommune";
myParent3.appendChild(selectList3);
document.getElementById("mySelectcommune").classList.add('dropdown2');


//*************** default ********
var option = document.createElement("option");


if ( document.getElementById("Commune").value === ""  ) {
		option = document.createElement("option");
		option.text = "إختر بلدية" ;
        option.value = "" ;  
        option.selected = "selected";
		selectList3.appendChild(option);

}
   else { 
          option = document.createElement("option");
          option.text = "إختر بلدية" ;
          option.value = "" ;  
		  option.selected = "selected";
		  selectList3.appendChild(option);
		  
		  option = document.createElement("option");
          option.text = document.getElementById("Commune").value ;
	      option.value = document.getElementById("Commune").value ;
		  option.selected = "selected";
		  selectList3.appendChild(option);

		  }
	
document.getElementById("mySelectcommune").options[0].disabled = true;

	$(document).ready(function(){
    $("#mySelectdaira").change(function(){
        var dairacode = $(this).children("option:selected").val();
        //alert("You have selected wilaya - " + dairacode);
		//********* set value of daira in input ********
		 document.getElementById("Daira").value= arr.wilayas[wilayacode].dairas[dairacode].name_ar;
        $('#mySelectcommune').find('option:not(:first)').remove();
        document.getElementById("mySelectcommune").options[0].selected = "selected";
		document.getElementById("Commune").value="";
		for (k in arr.wilayas[wilayacode].dairas[dairacode].communes) {
		var option = document.createElement("option");
	option.value = k ;
    option.text = arr.wilayas[wilayacode].dairas[dairacode].communes[k].name_ar ;
	if(option.text==document.getElementById("Commune").value) {option.selected = "selected";}

    selectList3.appendChild(option);
           }






		   $(document).ready(function(){


    $("#mySelectcommune").change(function(){
        var communecode = $(this).children("option:selected").val();

		//********* set value of commne in input ********

		 document.getElementById("Commune").value= arr.wilayas[wilayacode].dairas[dairacode].communes[communecode].name_ar;


});   });


		   });



		 });



	</script>
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

      <input type="file" name="uploadpic[]"  id="uploadpic" onchange="readURL(this),Filevalidation1();"   hidden  multiple>
	  
	  
      <label for="uploadpic" id="uploadpicbtn" >تحميل</label>


      <input type="button" name="savepics" value="حفظ الصور" id="b1" onclick="send()">

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

function options(){
	var settingselements = document.getElementById('settingselements');
	if (settingselements!=null) {
			settingselements.id = "settingselementsclick";
	}
	else{
	document.getElementById('settingselementsclick').id = "settingselements";
}
}

</script>


<script> 
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
</script> 



</form>

</body>
</html>
