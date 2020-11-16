<?php 
  session_start(); 

  if (!isset($_SESSION['id'])) {
  	header('location: login.php');
  }
 /* if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }  */
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
  session_start(); 

  if (isset($_SESSION['id'])) {
  $con=mysqli_connect("localhost","root","","bd");
	if(mysqli_connect_errno())
		echo"failed to connect ". mysqli_connect_error() ;  
	$id=$_SESSION['id'];
	
  $res=mysqli_query($con,"SELECT * FROM WORKER WHERE id='$id'"); 
  
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
	  
	  
	  
  }
  $res=mysqli_query($con,"SELECT * FROM photos WHERE id='$id'");
    $nphotos =mysqli_num_rows($res) ;
	$i=0;
while($row=mysqli_fetch_array($res))
  {     
$photos[$i]=$row['photo'];
$i++;
}
  }
  ?>


<div class="topbar">

</div>
<div id="container" >
<div id="square1">


   <?php echo' <img id="pic"  src=" '. $profile . ' " alt="" > '; ?> 

    <strong id="name" ><?php echo $fname .' '. $lname ; ?> </strong>

    <div class="rating">

      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>

    </div>

    <div class="infocontainer">


   
    <div class="info">
      <span><?php echo $email ; ?></span>
    </div>
	
	
    <div class="info">
      <span><?php echo $phone ; ?></span>
    </div>
	
    <div class="info">
      <span><?php echo $position ; ?></span>
    </div>
	
    <div class="info">
      <span><?php echo $birthday ; ?></span>
    </div>

    </div>
</div>

<div id="square2">


  <div class="description">
    <strong>Description</strong>
    <br>
    <br>
    <span><?php echo $description ; ?></span>
  </div>


</div>

<div id="square3">
    <div class="photocontainer">
	
     <?php echo'<img src=" '.    $photos[0]       .' " alt="" class="imgs" style="border-top-left-radius:inherit;" > ';  ?>
    <?php echo' <img src="  ' . $photos[1] .'" alt="" class="imgs"> '; ?>
    <?php echo' <img src=" ' . $photos[2] .'" alt="" class="imgs" style="border-top-right-radius:inherit;"> '; ?>
    <?php echo' <img src=" '   . $photos[3]  .' " alt="" class="imgs" style="border-bottom-left-radius:inherit;"> '; ?>
    <?php echo' <img src=" '.  $photos[4]  .     ' " alt="" class="imgs"> '; ?>
    <?php echo' <img src=" ' . $photos[5] .'" alt="" class="imgs" style="border-bottom-right-radius:inherit;"> ';  ?> 

    </div>

</div>

<div class="square4">
<?php 
//session_start(); 
//for my comment
 /* if (isset($_SESSION['username'])) {
	  $user=$_SESSION['username'];
	  $res=mysqli_query($con,"SELECT pprofile,lname,fname,id FROM worker WHERE username='$user'");
  while($row=mysqli_fetch_array($res)) { 
  	  $profile=$row['pprofile'] ;
		 		 $lname=$row['lname'] ;
				 		 $fname=$row['fname'] ;
						      
   echo' <div class="yourcomment"> ';
  echo'  <img src=" '.   $profile     .' " alt="" id="yourcommentpic"> '; 
   echo'    <form action="profile.php" method="post">   '; 
  echo' <input type="text" name="" value="" id="input1">     ';  
  echo' <input type="submit" name="commenter" value="" id="input1">   </div>  ';
                echo'   </form>    '; 
				
				}
  } */
  
  //for show all comments 
$res=mysqli_query($con,"SELECT * FROM comments WHERE id='$id'");
    
while($row1=mysqli_fetch_array($res))
  {     
$userid=$row1['user_id'];

$rest=mysqli_query($con,"SELECT pprofile,lname,fname FROM worker WHERE id='$userid' ");
    
while($row=mysqli_fetch_array($rest)){ 
	 
		 $profile=$row['pprofile'] ;
		 		 $lname=$row['lname'] ;
				 		 $fname=$row['fname'] ;
	 
}


   echo ' <div class="commentsection"> ';
        echo ' <div class="comment"> ' ; 
    echo '<img class="commentimg" src="'.   $profile    .' " alt=""> ' ; 
   echo ' <span class="cousername">'. $lname.'  '.$fname  . '</span> ' ; 
   echo ' <br> ' ;
   echo ' <span class="commenttxt">  ' .  $row1['comment']  .'       </span> </div> </div> ' ;

   

}
mysqli_close($con);
?>

<!--
<div class="yourcomment">
  <img src="my pic.jpg" alt="" id="yourcommentpic">
  <input type="text" name="" value="" id="input1">

</div>



<div class="commentsection">
  <div class="comment">
    <img class="commentimg" src="my pic.jpg" alt="">
    <span class="cousername">Sofi Oussama</span>
    <br>
    <span class="commenttxt">this is a comment for this profile</span>
  </div>

  <div class="comment">
    <img class="commentimg" src="jake.jpg" alt="">
    <span class="cousername">jake the dog</span>
    <br>
    <span class="commenttxt">this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test this is a comment for this profile but it is so long to test the page I don't what would happen but I trying so I will be repeating words,Test test</span>
  </div>


  <div class="comment">
    <img class="commentimg" src="hannibal.jpg" alt="">
    <span class="cousername">hannibal lecter</span>
    <br>
    <span class="commenttxt">can I eat your brain please?</span>
  </div>
</div>  -->


</div>
<a src > <button> edit </button> </a>
</div>

  </body>
</html>
