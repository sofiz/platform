<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>profile edit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">

</head>

<body>
<?php
$con = mysqli_connect('localhost', 'root', '', 'bd');
if(mysqli_connect_errno())
		echo"failed to connect ". mysqli_connect_error() ;
 //$id=$_GET['id'];
  $id=23;


  $res=mysqli_query($con,"SELECT * FROM WORKER WHERE 	id='$id'");

  while($row=mysqli_fetch_array($res))
  {
	  $username=$row['username'];
	  $position=$row['position'];
	  $email=$row['email'];
	  $phone=$row['phone'];
	  $birthday=$row['birthday'];
	  $description=$row['description'];
	  $profile=$row['pprofile'];
	   $fname=$row['fname'];
	    $lname=$row['lname'];
		 $work=$row['work'];




  }
  $res=mysqli_query($con,"SELECT * FROM photos WHERE id='$id'");
    $nphotos =mysqli_num_rows($res) ;
	$i=0;
while($row=mysqli_fetch_array($res))
  {
$photos[$i]=$row['photo'];
$i++;
}    ?>
<div class="topbar">

</div>

<form class="" action="" method="post">


<div id="container" >
<div id="square1">

<div class="" style="border-radius: inherit;">
  <img id="pic"  src="<?php echo $profile ?>" alt="" >




  <input type="file" name="fileToUpload" id="fileToUpload" hidden>
  <label for="fileToUpload" id="uploadbtn" class="fa fa-user" ></label>
  </div>

  <input type="text" name="info1" value="<?php echo $fname." ".$lname ?>" class="inputname" >


  <div class="infocontain2">


  <div class="info">
    <input type="text" name="info1" value="<?php echo $email ?>" class="inputinf">
  </div>
  <div class="info">
    <input type="text" name="info1" value="<?php echo $phone ?>" class="inputinf">
  </div>
  <div class="info">
    <input type="text" name="info1" value="<?php echo $position ?>" class="inputinf">
  </div>
  <div class="info">
    <input type="text" name="info1" value="<?php echo $birthday ?>" class="inputinf">
  </div>
  <div class="info">
    <input type="text" name="info1" value="<?php echo $work ?>" class="inputinf">
  </div>

  </div>
</div>

<div id="square2">


<div class="description">
  <strong>Description</strong>
  <br>
  <textarea type="text" name="" value="" class="descriptioninp"> <?php echo $description  ?> </textarea>
</div>


</div>

<div id="square3">
<button type="button" id="picsbtn">Edit you photos</button>

  <!-- Trigger/Open The Modal -->

<strong id="photostitle" class="titles">Pictures</strong>

  <div class="photocontainer2">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs" >
   <img src="<?php echo $photos[1]?>" alt="" class="imgs">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs">



  </div>


</div>

<div class="btns">

<a  href="profile.html" class="btn">
<i class="fa fa-times "></i>
<span>cancel</span>
</a>



<input type="submit" value="save" id="save">
<i class="fa fa-save icn"></i>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="photocontainermodal">

      <div id="pic1" class="piccontainer">
      <img src="1.jpg" alt="" class="imgs">
      <button id="deletepic1" type="button" name="deletepic" class="closepic" onclick="myFunction(1)">&times;</button>
    </div>

      <div id="pic2" class="piccontainer">
      <img src="2.jpg" alt="" class="imgs">
      <button id="deletepic2" type="button" name="deletepic" class="closepic" onclick="myFunction(2)">&times;</button>
    </div>

    </div>
    <div class="piceditbtn">

      <input type="file" name="uploadpic" id="uploadpic" hidden>
      <label for="uploadpic" id="uploadpicbtn" >Upload</label>
      <input type="submit" name="savepics" value="save" id="savepicbtn">

    </div>
  </div>

</div>

<script>
function myFunction(x) {
  var myobj = document.getElementById("pic"+x);
  myobj.remove();
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
</script>

</form>

</body>
</html>
