<?php 
  session_start(); 

    if (!isset($_SESSION['Username'])) {
  	header('location: login.php');
              }
 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  } 
?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <style media="screen">
    body{
      padding-top: 0px;

      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(-45deg, rgb(28 181 0) 0%, rgb(154 252 136) 100%);
      background-size: 500%;
      animation-name: mymove;
      animation-direction: alternate;
      animation-iteration-count: infinite;
      animation-duration: 15s;
      padding-top: 0px;

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
    margin-top: 60px;
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
  }

  .square4{
    background: #ffffffde;
    margin-left: 37px;
    margin-top: 16px;
    border-radius: inherit;
    padding-top:25px;
    padding-left:25px;
    padding-right:25px;
    padding-bottom:25px;
    box-shadow: 0px 4px 20px 0px #0000006b;
  }

  .yourcomment{
   height:45px;


  }

  #input1{
    position: absolute;
    height: 35px;
    margin-left: 10px;
    width: 650px;
    border-radius: 6px;
    border: none;
    background-color: #0000004a;
    padding-left: 10px;
  }

  #input1:focus{
  border:none;


  }
  #yourcommentpic{
   width:36px;
   height:36px;
   background:black;
   border-radius:6px;
   object-fit: cover;
  }

  .commentsection{
    margin-top:25px;
  }

  .comment{

  padding-right: 60px;
  }

  .commentimg{

    width:36px;
    height:36px;
    background:black;
    border-radius:6px;
    margin-right:10px;
    object-fit: cover;
  }

  .cousername{
    top: -20px;
    position: relative;
    font-weight: bold;
    font-size: 18px;
  }
  .commenttxt{
    position: relative;
    top: -20px;
    left: 50px;
  }

  .topbar{

    background: #ffffffde;
    width: 1349px;
    height: 50px;
    top: 0px;
    position: absolute;
    left: 0;
  }
  @keyframes mymove {
    0%   {background-position: 0%;}
    50%  {background-position: 100%;}
  </style>
  <body>
 
  <?php 
  

  if (isset($_SESSION['Username'])) {
    include('conn.php') ;
	$Username=$_SESSION['Username'];
	
  $res=mysqli_query($db,"SELECT * FROM users WHERE Username='$Username'"); 
  
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
	  $id=$row['id'];
	  
	  
	  
  }
  $res=mysqli_query($db,"SELECT * FROM photos WHERE User_id='$id'");
    $nphotos =mysqli_num_rows($res) ;
	$i=0;
while($row=mysqli_fetch_array($res))
  {     
$photo[$i]=$row['Photo_Path'];
$i++;
}
  }
  ?>


<div class="topbar">

</div>
<div id="container" >
<div id="square1">


   <?php echo' <img id="pic"  src="imgs/ '. $Profile_Pic . ' " alt="" > '; ?> 

    <strong id="name" ><?php echo $First_Name .' '. $Last_Name ; ?> </strong>

    <div class="rating">

      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>

    </div>

    <div class="infocontainer">


   
    <div class="info">
      <span><?php echo $Email ; ?></span>
    </div>
	
	
    <div class="info">
      <span><?php echo $Phone ; ?></span>
    </div>
	
    <div class="info">
      <span><?php echo $Location ; ?></span>
    </div>
	
    <div class="info">
      <span><?php echo $Birthday ; ?></span>
    </div>

    </div>
</div>

<div id="square2">


  <div class="description">
    <strong>Description</strong>
    <br>
    <br>
    <span><?php echo $Description ; ?></span>
  </div>


</div>

<div id="square3">
    <div class="photocontainer">
	<?php
     echo'<img src="imgs/ '.    isset($photo[0] )      .' " alt="" class="imgs" > ';  
	 echo'<img src="imgs/ '.   isset($photo[1] )      .' " alt="" class="imgs" > ';
	 echo'<img src="imgs/ '.   isset( $photo[2] )      .' " alt="" class="imgs" > ';
?>
    </div>

</div>

<div class="square4">
<?php 

  //for show all comments 

$res=mysqli_query($db,"SELECT * FROM comments WHERE User_id='$id'");

while($row=mysqli_fetch_array($res))
  {

$Commentor_id=$row['Commentor_id'] ;
$rest=mysqli_query($db,"SELECT Profile_Pic,Last_Name,First_Name FROM users WHERE id='$Commentor_id' ");

while($row1=mysqli_fetch_array($rest))
       {

		 $Profile_Pic1=$row1['Profile_Pic'] ;
		 $Last_Name1=$row1['Last_Name'] ;
		 $First_Name1=$row1['First_Name'] ;

              }


   echo ' <div class="commentsection"> ';
   echo ' <div class="comment"> ' ;
   echo '<img class="commentimg" src="'.   $Profile_Pic1    .' " alt=""> ' ;
   echo ' <span class="cousername">'. $First_Name1.'  '.$Last_Name1  . '</span> ' ;
   echo ' <br> ' ;
   echo ' <span class="commenttxt">  ' .  $row['Comment']  .'       </span> </div> </div> ' ;
   }
mysqli_close($db);
?>
</div>
<a href='profile_edit.php' > <button> edit </button> </a>
</div>

  </body>
</html>
