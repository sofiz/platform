<?php
 include('conn.php');
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
	  if($row['Wilaya']!=null){
		  $words=explode(" ",$row['Wilaya']);
		  foreach ($words as $word) {
			  $sound .= metaphone($word)." " ;

		                           }
	                    }
						if($row['Daira']!=null){
		  $words=explode(" ",$row['Daira']);
		  foreach ($words as $word) {
			  $sound .= metaphone($word)." " ;

		                           }
	                    }
			if($row['Commune']!=null){
		  $words=explode(" ",$row['Commune']);
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

?>