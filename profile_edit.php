<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">

</head>

<style media="screen">

  body{


    font-family: 'Quicksand', sans-serif;
    background: linear-gradient(-45deg, rgb(28 181 0) 0%, rgb(154 252 136) 100%);
    background-size: 500%;
    animation-name: mymove;
    animation-direction: alternate;
    animation-iteration-count: infinite;
    animation-duration: 15s;
    padding-top: 0px;
    height:515px;
  }


  #container{
   width: 805px;
   margin-top:100px;
   margin-left:236px;
   border-radius:15px;

  }

  #square1{
    background:#ffffffde;
    width:374px;
    height:460px;
    margin-left:37px;
    border-radius:inherit;
    box-shadow: 0px 4px 20px 0px #0000006b;
  }

  #square2{
    background:#ffffffde;
    width:374px;
    height:216px;
    margin-top:100px;
    margin-left:675px;
    position: absolute;
    top:0px;
    left:0px;
    border-radius:inherit;
    box-shadow: 0px 4px 20px 0px #0000006b;
  }


  #square3{
    background:#ffffffde;
    width:374px;
    height:224px;
    margin-top:100px;
    margin-left:675px;
    position: absolute;
    top:236px;
    left:0px;
    border-radius:inherit;
    box-shadow: 0px 4px 20px 0px #0000006b;
  }


  #pic{
  height:208px;
  left: 83px;
  position: relative;
  border-radius:inherit;
  box-shadow: 0px 4px 14px #1c4e009e;
  margin-top:15px;

  }


}


  #name{
  position: relative;
  top:30px;
  font-size:20px;
  right:90px;
  color: #313131;
  }


  .checked {
color: #86be67;
}
.rating{

  position: relative;
  top: 40px;
  left: 140px;

}

.infocontainer{
  margin-top: 20px;
  margin-left: 40px;


}
.info{
 width:374px;
 height:20px;
 margin-top:10px;
 font-size:18px;

}

.description{


font-size:18px;
margin-top: 20px;
margin-left: 20px;
margin-right: 20px;

}


.photocontainer{
  width:324px;
  height:212px;
  margin-top:6px;
  margin-left:25px;
  margin-right:25px;
  border-radius:inherit;
}
.imgs{
  width:100px;
  height:100px;
  margin-right:5px;
  margin-top:4px;
  border:none;
  object-fit: cover;
  border-radius: 15px;
}

.topbar{

  background: #ffffffde;
  width: 100%;
  height: 50px;
  top: 0px;
  position: absolute;
  left: 0;
}

.btns{

  margin-left: 550px;
  margin-top: 15px;

}


.btn{

padding-top:5px;
padding-left:5px;
padding-right:5px;
padding-bottom:5px;
background:#ffffffde;
margin-right:10px;
border-radius: 5px;
box-shadow: 0px 4px 20px 0px #0000006b;
  border: none;
  text-decoration: none;
color: black;
}

#save{

  padding-top:5px;
  padding-left:22px;
  padding-right:10px;
  padding-bottom:5px;
  background:#ffffffde;
  margin-right:10px;
  border-radius: 5px;
  box-shadow: 0px 4px 20px 0px #0000006b;
  border: none;
  font-size: 16px;
  font-family: 'Quicksand';
  cursor: pointer;
}

.icn{
  padding: 0px;
  min-width: 20px;
  position: relative;
  left: -75px;
}


.inputinf{

      margin-top: 7px;
      height: 25px;
      border: none;
      background: #00000026;
      border-radius: 5px;
      padding-left: 15px;
}

.inputname{

  margin-left: 92px;
    margin-top: 7px;
    height: 35px;
    border: none;
    background: #00000026;
    border-radius: 5px;
    padding-left: 15px;
}

.descriptioninp{

      font-size: 18px;
      margin-top: 15px;
      margin-right: 20px;
      height: 130px;
      width: 327px;
      background: #00000026;
      border: none;
      resize: none;
      padding-top: 10px;
      padding-left: 10px;
}


#uploadbtn{
  font-size: 70px;
      position: absolute;
      width: 208px;
      text-align: center;
      line-height: 208px;
      margin-top: 15px;
      left: 364px;
      opacity: 0;
      background: #f0fded6e;
     border-radius: inherit;
    }
    #uploadbtn:hover{
      opacity: 100%;
    }

#picsbtn{
position: absolute;
width:374px;
height: 224px;
opacity: 0;
font-size: large;
font-family: 'Quicksand';
border: none;
border-radius: inherit;

}

#picsbtn:hover{
opacity: 1;
background: #f0fded6e;
}

#picsbtn:active{
border: white;
border-radius: 15px;
}

.piccontainer{

  display: inline-block;
}


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #e4f7e0;
      margin: 15% auto;
      width: 50%;
      border-radius: inherit;
      padding-top: 10px;
      padding-bottom: 25px;
      padding-left: 25px;
      padding-right: 25px;
      border-radius: 15px;
      box-shadow: 0px 4px 20px 0px #0000006b;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}


.photocontainermodal{
margin-top: 35px;

}

.deletepic{

  position: absolute;
margin-left: -24px;
margin-top: 3px;
border-radius: 6px;
background: #d2dcd0;
border-width: 1px;
}

#uploadpicbtn{
  background: #efefef;
  border: solid;
  border-width: 1px;
  border-radius: 4px;
  padding: 5px;
}

#savepicbtn{
  background: #efefef;
      border: solid;
      border-width: 1px;
      border-radius: 4px;
      padding: 5px;
      font-family: 'Quicksand';
      font-size: inherit;

}

.piceditbtn{

  margin-left: 500px;
margin-top: 30px;

}

@keyframes mymove {
  0%   {background-position: 0%;}
  50%  {background-position: 100%;}
}

</style>




<body>
<?php
$con = mysqli_connect('localhost', 'root', '', 'bd', 3308);
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


  <div class="infocontainer">


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

  <!-- Trigger/Open The Modal -->
<button type="button" id="picsbtn">Edit you photos</button>

  <div class="photocontainer">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs" style="border-top-left-radius:inherit;">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs" style="border-top-right-radius:inherit;">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs" style="border-bottom-left-radius:inherit;">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs">
   <img src="<?php echo $photos[1]?>" alt="" class="imgs" style="border-bottom-right-radius:inherit;">



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
      <button id="deletepic1" type="button" name="deletepic" class="deletepic" onclick="myFunction(1)">x</button>
    </div>

      <div id="pic2" class="piccontainer">
      <img src="2.jpg" alt="" class="imgs">
      <button id="deletepic2" type="button" name="deletepic" class="deletepic" onclick="myFunction(2)">x</button>
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
