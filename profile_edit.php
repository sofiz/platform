
<?php include('conn.php'); ?>
	<?php
	session_start();
	if (!isset($_SESSION['Username'])) {
  	header('location: signin.php');
              }

  $Username=$_SESSION['Username'];


if (isset($_POST['save'])){
	//------- get id -----------------------------
	$re=mysqli_query($db,"SELECT id FROM users WHERE 	Username='$Username'");
	mysqli_query($db, $re);
	while($row=mysqli_fetch_array($re))
  {$id=$row['id']; }

  $First_Name =  $_POST['First_Name'];
  $Last_Name = mysqli_real_escape_string($db, $_POST['Last_Name']);
  $Email = $_POST['Email'];
  $Phone =  $_POST['Phone'];
  $Job = $_POST['Job'];
  $Location = $_POST['Location'];
  $Description = $_POST['Description'];
  $Birthday = $_POST['Birthday'];



  if (empty($First_Name )) { array_push($errors, "First Name is required"); }
  if (empty($Last_Name)) { array_push($errors, "Last Name is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Phone)) { array_push($errors, "Phone is required"); }
  if (empty($Job)) { array_push($errors, "Job is required"); }
  if (empty($Location)) { array_push($errors, "Location is required"); }
  if (empty($Birthday)) { array_push($errors, "Birthday is required"); }
  if (empty($Description)) { array_push($errors, "Description is required"); }


  $tar="imgs/";
  $tar=$tar.basename($_FILES['fileToUpload']['name']);
  $pic=($_FILES['fileToUpload']['name']) ;
  $queryi = "UPDATE users SET Profile_Pic='$pic' where id ='$id' ";
		if ($pic!=""){
			mysqli_query($db, $queryi);
			move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$tar);
}
	$query = "UPDATE users
	SET  First_Name='$First_Name', Last_Name='$Last_Name',Email='$Email',Phone='$Phone',Job='$Job',Location='$Location',Birthday='$Birthday',Description='$Description'  WHERE id='$id'" ;
  	//$query ="UPDATE comments set rating='$rating' WHERE User_id='$User_id' AND Commentor_id='$Commentor_id'";
	mysqli_query($db, $query);

	header('location:profile_edit.php');
}

///-------------------------------------------------------------------------------------------------------
if (isset($_POST['savepics'])){

	/////-------------------- Get id -------------------
	$re=mysqli_query($db,"SELECT id FROM users WHERE 	Username='$Username'");
	mysqli_query($db, $re);
	while($row=mysqli_fetch_array($re))
  {$id=$row['id']; }




  $tar="imgs/";
  $tar=$tar.basename($_FILES['uploadpic']['name']) ;

  $pic=($_FILES['uploadpic']['name']) ;

  $query = "INSERT INTO photos (Photo_Path,User_id) VALUES('$pic', '$id') ";
	if ($pic!=""){
  mysqli_query($db, $query);
			  move_uploaded_file ($_FILES['uploadpic']['tmp_name'],$tar);}

	header('location:profile_edit.php');
	mysqli_close ( $db );

}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>profile edit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="search.css">
</head>

<body>

<?php


//-----------------select data --------------------------



  $res=mysqli_query($db,"SELECT * FROM users WHERE 	Username='$Username'");
  if (!$res) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
  while($row=mysqli_fetch_array($res))
  {
	  $Username=$row['Username'];
	  $Location=$row['Location'];
	  $Email=$row['Email'];
	  $Phone=$row['Phone'];
	  $Birthday=$row['Birthday'];
	  $Description=$row['Description'];
	  $Profile_Pic=$row['Profile_Pic'];
	  $First_Name=$row['First_Name'];
	  $Last_Name=$row['Last_Name'];
	  $Job=$row['Job'];
	  $Type=$row['Type'];
	  $id=$row['id'];

  }
  //--------------- select photos and save (photo_path) , (photo_id) in same index $i ===> tow array------------------------------------------
  $Photo=array();
  $Photo_id=array();
    $ress=mysqli_query($db,"SELECT * FROM photos WHERE 	User_id='$id'");

    $nphotos = mysqli_num_rows($ress) ;

	 if (!$ress) {
                   printf("Error: %s\n", mysqli_error($db));
                   exit();
                 }
    while($row=mysqli_fetch_array($ress))
                   {
     array_push($Photo,"imgs/".$row['Photo_Path']);
	 array_push($Photo_id,$row['Photo_id']);

                   }



 ?>
 <?php include('topbar.php'); ?>
<form class="f" action="profile_edit.php" method="post"  enctype="multipart/form-data" >


<div id="container1" >
<div id="square1">

<div class="" style="border-radius: inherit;">
  <img id="pic"  src="imgs/<?php   echo  $Profile_Pic; ?>" alt="" >




  <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL1(this);" hidden>
  <label for="fileToUpload" id="uploadbtn" class="fa fa-user" ></label>
  </div>

  <input type="text" name="First_Name" value="<?php echo $First_Name ; ?>" class="inputname" >
  <input type="text" name="Last_Name" value="<?php echo $Last_Name ;?>" class="inputname" id="inputname2">


  <div class="infocontain2">


  <div class="info2">
    <input type="text" name="Email" value="<?php echo $Email ?>" class="inputinf">
  </div>
  <div class="info2">
    <input type="text" name="Phone" value="<?php echo $Phone ?>" class="inputinf">
  </div>
  <div class="info2">
    <input type="text" name="Location" value="<?php echo $Location ?>" class="inputinf">
  </div>
  <div class="info2">
    <input type="text" name="Birthday" value="<?php echo $Birthday ?>" class="inputinf">
  </div>
  <div class="info2">
    <input type="text" name="Job" value="<?php echo $Job ?>" class="inputinf">
  </div>

  </div>
</div>

<div id="square2">


<div class="description">
  <strong>Description</strong>
  <br>
  <textarea type="text" name="Description" value="" class="descriptioninp"><?php echo $Description  ?></textarea>
</div>


</div>

<div id="square3">
<button type="button" id="picsbtn">Edit you photos</button>

  <!-- Trigger/Open The Modal -->

<strong id="photostitle" class="titles">Pictures</strong>

  <div class="photocontainer2">
		<?php
for($j=0;$j<$nphotos && $j<3;$j++){
	echo '<img src="'. $Photo[$j] .'" alt="" class="imgs">';

}
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
	for($j=0;$j<$nphotos;$j++){
      echo '<div id="pic'. $Photo_id[$j].'" class="piccontainer">';
       echo '<img src="'. $Photo[$j] .'" alt="" class="imgs">';
     echo ' <button id="deletepic1" type="button" name="deletepic" class="closepic" onclick="myFunction('.$Photo_id[$j].')"> &times; </button> ';
	 echo ' </div>';

	 }
	 		 echo '<img src="#" alt="" class="imgs" id="blah" style="object-fit: cover;">';
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
