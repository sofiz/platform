<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
    <title></title>
  </head>

  <?php
include('../conn.php') ;
session_start();
include('topbar.php'); 
?>
  <body>
    <div class="container">
      <textarea name="posttextarea" class="posttextarea" placeholder="write your text here"></textarea>
      <div class="btnscontainer">
        <button type="button" name="upload" class="button" id="upload">upload</button>
        <button type="button" name="upload" class="button" id="submitpost">submit</button>

      </div>
      <div class="filterscontain">
        <div class="jobdrop">
          <select class="dropdown" name="jobs" id="jobs">

          </select>
        </div>
        <div class="wilayadrop">
          <select class="dropdown" name="wilayas" id="wilayas">

          </select>
        </div>
        <input type="radio" name="offer" value="offer" class="radio">
        <div class="filtersradiotxt">
          <p>job</p>
        </div>
        <input type="radio" name="looking" value="looking" class="radio">
        <div class="filtersradiotxt">
          <p>offer</p>
        </div>
      </div>
	  
	  
	  
	  <?php
    $res=mysqli_query($db,"SELECT * FROM posts "); 
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
    echo ' <img src="'.$Profile_Pic.'" alt="">'; 
    echo '</div>' ; 
		
    echo '<div class="name">' ; 
    echo ' <p class="nametxt">'.$First_Name .' '. $Last_Name . '</p>' ; 
    echo ' </div> ' ; 
		
    echo '<div class="posttxtdiv">'; 
    echo '<p class="posttxt">'.$row['Txt'].'</p>'; 
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
			 } 
			
			
		   echo '<div class="commentsection">'; 
           echo ' <div class="comimgconatin">'; 
           echo '<img src="'.$CProfile_Pic.'" alt="">'; 
           echo '</div>'; 
           echo '<div class="comname">'; 
           echo '<p class="comenametxt">'.$CFirst_Name .' '.$CLast_Name.'</p>'; 
           echo ' </div> ';  
           echo ' <div class="comtext"> ';  
           echo ' <p>'.$row2['Comment'].'</p> ';  
           echo ' </div>'; 
           
			
		 }

         



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
echo '<img src="'.$MCProfile_Pic.'" alt=""> ';   
echo '</div>';
echo '<input type="text" name="comment" value="" class="inputcom"> ';   
echo '<button type="submit" name="submitcomment" class="submitcom"><i class="fa fa-paper-plane" aria-hidden="true"></i></button> ';   
echo '</div>' ; 


}


	   
	   
?>
     	
        
		
		
        
		
      
    </div>
  </body>
</html>
