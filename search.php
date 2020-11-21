<?php
session_start();
if(isset($_POST['logout'])) {
  //Unset cookies and other things you want to
  session_destroy();
  header('Location: search.php'); //Dont forget to redirect
  exit;
}
if(isset($_POST['login'])) {

  header('Location: signin.php'); //Dont forget to redirect
  exit;
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="search.css">
  </head>

  <body>
<form action="search.php" method="post">
  <div class="topbar">



<div class="nav">


<?php
if (isset($_SESSION['Username'])) {

echo  '<a href="my-profile.php" id="my-profilebtn" class="fa fa-user"></a>


';
echo '<input type="submit" name="logout" value="logout" id="logout" hidden>
<label for="logout" id="logoutbtn" class="fa fa-sign-out" ></label>
';

}

else {    echo '<input type="submit" name="login" value="login"  id="login" hidden>
<label for="login" id="logoutbtn" class="fa fa-sign-in" ></label>';   }
?>

</div>
</div>

    <div class="searchbar">
    <input type="text" name="search" placeholder="search" class="searchinput">
    <div >
  <select class="dropdown" value="location" name="location" id="location">
      <option value="" selected disabled hidden>select location</option>
      <option value="00">00</option>
      <option value="01">01</option>
      <option value="10">10</option>
      <option value="11">11</option>
  </select>
    </div>
    <div >
      <select class="dropdown" name="category" id="category">
          <option value="" selected disabled hidden>select category</option>
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="10">10</option>
          <option value="11">11</option>
      </select>
    </div>
    <input type="submit" name="recherche"  value= "recherche" class="searchbtn">
    </div>



	 <?php /* include('errors.php'); */  ?>
				</form>

        <a href="profile.php?id=1" > profile </a>
<?php
$errors = array();

// connect to the database
 include('conn.php');

  
  
  if (isset($_POST['search'])) {
	  
	  
//----------------------- get colomun -------------------------
     $sql1="select * from users ";
	 $res1=mysqli_query($db,$sql1);
  if(!$res1){
	  echo "error".mysqli_error($db);
            } 
//---------------------- update indexing colomun by row ---------------
  while($row=mysqli_fetch_assoc($res1)){
	  $sound=" " ;
	  
        //-------------------------------
	  if($row['First_Name']!=null){
		  $words=explode(" ",$row['First_Name']);
		  foreach ($words as $word) {
			  $sound .= metaphone($word)." " ;
			  
		                           }
	                    }
	   //---------------------------------
	  if($row['Last_Name']!=null){
		  $words=explode(" ",$row['Last_Name']);
		  foreach ($words as $word) {
			  $sound .= metaphone($word)." " ;
			  
		                           }
	                    }
	  //---------------------------------
	  if($row['Username']!=null){
		  $words=explode(" ",$row['Username']);
		  foreach ($words as $word) {
			  $sound .= metaphone($word)." " ;
			  
		                           }
	                    }
	  //---------------------------------
	  if($row['Location']!=null){
		  $words=explode(" ",$row['Location']);
		  foreach ($words as $word) {
			  $sound .= metaphone($word)." " ;
			  
		                           }
	                    }
	  //---------------------------------
	   if($row['Job']!=null){
		  $words=explode(" ",$row['Job']);
		  foreach ($words as $word) {
			  $sound .= metaphone($word)." " ;
			  
		                           }
	                    }
	  
	  
	 $id=$row['id'];
	 $sql2="UPDATE users SET indexing='$sound' where id=$id";
	 $res2=mysqli_query($db,$sql2);
	 if(!$res2){
	 echo "error".mysqli_error($db);
               } 
  }
	  
	  
	  
	  
	
	  
	  
	  
	  
	  
	  
	  
	 
	  $query = $_POST['search'];
	  
	  //*-------get value of search ------------
	 
	  
	  //----------from word to metaphone ( *****all**** )and select from table -----------
	  $search = explode(" ",$query);
	  $search_string=" ";
	   foreach ($search as $word) {
			  $search_string = $search_string.metaphone($word)." " ;
		
		                        }
	$sql="SELECT * FROM users WHERE indexing like '%$search_string%'";
	$res=mysqli_query($db,$sql);
	
			if(!$res){
	               echo "error".mysqli_error($db);
                    } 			


		//---------------- to wirte the results ------------
	  
	  if(mysqli_num_rows($res)>0){
			  while($row1=mysqli_fetch_array($res))
					  {
						  
						echo'  <div class="resultcontainer">  ';
      echo'<a href="" ><img src="jake.jpg" alt="" class="resimg" ></a> ';
      echo'<div class="infocontainer"> ';
      echo'<a href="" class="name">  '. $row1['First_Name']." ".$row1['Last_Name'] . ' </a>  ';
      echo'<p class="info"> ' .$row1['Phone'] .  '</p> ';
      echo' <p class="info">'. $row1['Location']. '</p>  </div> </div>   ';
	 

					  }

                                 }
	     //----------------			from word to metaphone ( *****single**** )and select from table  and write the results  -------------		 
								 
        if(mysqli_num_rows($res)==0){	
              $count=0;
			  $words=explode(" ",$query);
			  
        foreach ($words as $word ){
			  $mword= metaphone($word);
			  
		                        
	$sql="SELECT * FROM users WHERE indexing LIKE '%$mword%'";
	$res=mysqli_query($db,$sql);
	
			if(!$res){
	               echo "error".mysqli_error($db);
                    } 
		if(mysqli_num_rows($res)>0){
			
			while($row2=mysqli_fetch_assoc($res))
					  {
						  $count++; 
						echo'  <div class="resultcontainer">  ';
      echo'<a href="" ><img src="jake.jpg" alt="" class="resimg" ></a> ';
      echo'<div class="infocontainer"> ';
      echo'<a href="" class="name">  '. $row2['First_Name']." ".$row2['Last_Name'] . ' </a>  ';
      echo'<p class="info"> ' .$row2['Phone'] .  '</p> ';
      echo' <p class="info">'. $row2['Location']. '</p>  </div> </div>   ';
            
					  }
		               }     }
					   if($count==0){
						   echo '<div class="resultcontainer"> ';
                           echo ' <p id="noresult">no result found!</p>  </div> ';  }
		         } 
	  }
	  
?>


  </body>
</html>
