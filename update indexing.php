<?php

  $count=0;
 $arr=array();
  
  
  function redu($res4){
		                              if(!$res4){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res4)>0){

			                          while($row4=mysqli_fetch_assoc($res4)){
										  

						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row4['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
									  
									  if(($row4['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row4['id'].'" ><img src="imgs/'.$row4['id'].'/'.$row4['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row4['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row4['id'].'" class="name">  '. $row4['First_Name']." ".$row4['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row4['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row4['Job'] .  '</p> ';
         if(empty($row4['Daira'])&&empty($row4['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row4['Wilaya'].'</span></p> </div> </div>';
         if(!empty($row4['Daira'])&&empty($row4['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row4['Wilaya'].','.$row4['Daira'].'</span></p> </div> </div>';
		if(!empty($row4['Daira'])&&!empty($row4['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row4['Wilaya'].','.$row4['Daira'].','.$row4['Commune'].'</span> </p> </div> </div>';
                                      
									  array_push($arr,$row4['id']);
				                 	  }}
		                                
										}     
		
  
  }   
 if(isset($_GET['recherche'])) {
 $Name = mysqli_real_escape_string($db,$_GET['search']);
 $Job = mysqli_real_escape_string($db,$_GET['Job']);
 $Wilaya =mysqli_real_escape_string($db,$_GET['Wilaya']);
 
 $carc=array("o","O","a","A","i","I","e","E");  

 if(empty($Name) && empty($Job) &&  empty($Wilaya)){
				      echo '<div class="resultcontainer"> ';
                      echo ' <p id="noresult"> no result found! <br> Please ENter Wilaya ANd Job  <p>  </div> '; 
					  
					  exit ; }
	              

				  else if (empty($Name)){
	        //********************************* Empty Name ****************************************
	             if(empty($Name) && !empty($Job) &&  !empty($Wilaya))
			     $sql1="SELECT * FROM users WHERE  Job='$Job' AND Wilaya='$Wilaya' ";
			          else if(empty($Name) && !empty($Job) &&  empty($Wilaya))
				        $sql1="SELECT * FROM users WHERE  Job='$Job'  ";
				              else if(empty($Name) && empty($Job) &&  !empty($Wilaya))
						        $sql1="SELECT * FROM users WHERE Wilaya='$Wilaya' ";
                                    $sql1= $sql1." and  Type = 'worker' ";
	                                  $res1=mysqli_query($db,$sql1);

		                            	if(!$res1){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res1)>0){
                                      
			                          while($row1=mysqli_fetch_assoc($res1))
				                      	  {

						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row1['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'    <div class="resultcontainer">  ';
									  
                                      //echo'<a href="profile.php?id='.$row0['id'].'" ><img src="imgs/'.$row0['id'].'/'.$row0['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									   
									   if(($row1['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row1['id'].'" ><img src="imgs/'.$row1['id'].'/'.$row1['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row1['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row1['id'].'" class="name">  '. $row1['First_Name']." ".$row1['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row1['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row1['Job'] .  '</p> ';
									  
                        if(empty($row1['Daira'])&&empty($row1['Commune']))
         echo '<p class="info"><span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row1['Wilaya'].'</span></p></div> </div>';
         if(!empty($row1['Daira'])&&empty($row1['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row1['Wilaya'].','.$row1['Daira'].'</span></p></div> </div>';
		if(!empty($row1['Daira'])&&!empty($row1['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top000000000000000: -2px;">'.$row1['Wilaya'].','.$row1['Daira'].','.$row1['Commune'].'</span> </p> </div> </div> ';
		
                                      array_push($arr,$row1['id']);
				                 	  }}
		                                }
										
										
										
										if($count==0){
                                      
						              echo '<div class="resultcontainer"> ';
                                      echo ' <p id="noresult">no result found!</p>  </div> '; 
									  
									  $count=-5;
									  }
					               
				  }
		   

			              else if(!empty($Name)){
							  
							     
//-------------------------------------------------------- search by name ----------------------------------------------------------------------------------------------


if(!empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%') AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
		else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
               $sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%' )AND Job='$Job'  ";
			   else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
                      $sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%' )AND Wilaya='$Wilaya'  ";
                       //********************************* name exxist .... dadira and commune not exissts
				         else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
                            $sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%' )";
							
							
							$sql2= $sql2." and  Type = 'worker' ";
					
	                                  $res2=mysqli_query($db,$sql2);


		                              if(!$res2){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res2)>0){

			                          while($row2=mysqli_fetch_assoc($res2)){
										  

						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row2['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
									  
									  if(($row2['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row2['id'].'" ><img src="imgs/'.$row2['id'].'/'.$row2['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row2['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row2['id'].'" class="name">  '. $row2['First_Name']." ".$row2['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row2['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row2['Job'] .  '</p> ';
         if(empty($row2['Daira'])&&empty($row2['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row2['Wilaya'].'</span></p> </div> </div>';
         if(!empty($row2['Daira'])&&empty($row2['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row2['Wilaya'].','.$row2['Daira'].'</span></p> </div> </div>';
		if(!empty($row2['Daira'])&&!empty($row2['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row2['Wilaya'].','.$row2['Daira'].','.$row2['Commune'].'</span> </p> </div> </div>';
                                      
									  array_push($arr,$row2['id']);
				                 	  }}
		    

									  }


									  
									  
									  
									  
//---------------------------------------------------------hena-------------------------------------------------------------------------------------------------------									  

									  $words=explode(" ",$Name);
									 
                                      foreach ($words as $word ){
			  						 
		if(!empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%') AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
		else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
               $sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%') AND Job='$Job'  ";
			   else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
                      $sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%') AND Wilaya='$Wilaya'  ";
                       //********************************* name exxist .... dadira and commune not exissts
				         else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
                            $sql3="SELECT * FROM users WHERE (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%')  ";


$sql3= $sql3." and  Type = 'worker' ";
	                                  $res3=mysqli_query($db,$sql3);


		                              if(!$res3){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res3)>0){

			                          while($row3=mysqli_fetch_assoc($res3)){
										  

						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row3['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
									  
									  if(($row3['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row3['id'].'" ><img src="imgs/'.$row3['id'].'/'.$row3['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row3['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row3['id'].'" class="name">  '. $row3['First_Name']." ".$row3['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row3['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row3['Job'] .  '</p> ';
         if(empty($row3['Daira'])&&empty($row3['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row3['Wilaya'].'</span></p> </div> </div>';
         if(!empty($row3['Daira'])&&empty($row3['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row3['Wilaya'].','.$row3['Daira'].'</span></p> </div> </div>';
		if(!empty($row3['Daira'])&&!empty($row3['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row3['Wilaya'].','.$row3['Daira'].','.$row3['Commune'].'</span> </p> </div> </div>';
                                      
									  array_push($arr,$row3['id']);
				                 	  }
		                                
									  }     
									  }
									  
									  }



						  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
//------------------------------------------------------------- search by soundexx metaphone ------------------------------------------------------------------------------------									  
									 



									
									 
                                      
			  						  if (strlen($Name)>2){
										  
                                      $firstChar = mb_substr($Name, 0, 1, "UTF-8");

									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($Name);
									   
                                       $soundex= metaphone($en_word_2);
                                       }
									  
									  else $soundex =metaphone($Name);
									  
									  $firstChar = mb_substr($soundex, 0, 1, "UTF-8");
									  
									  if(in_array($firstChar, $carc))
									  $soundex = substr($soundex, 1);
									  
									  
//*********************** NAME EXIST // name andd daira andd ccommune exissts ************************************
if(!empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql5="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
		else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
               $sql5="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job'  ";
			   else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
                      $sql5="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Wilaya='$Wilaya'  ";
                       //********************************* name exxist .... dadira and commune not exissts
				         else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
                            $sql5="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' ";

$sql5= $sql5." and  Type = 'worker' ";
	                                  $res5=mysqli_query($db,$sql5);


		                              if(!$res5){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res5)>0){

			                          while($row5=mysqli_fetch_assoc($res5)){
										  

						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row5['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
									  
									  if(($row5['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row5['id'].'" ><img src="imgs/'.$row5['id'].'/'.$row5['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row5['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row5['id'].'" class="name">  '. $row5['First_Name']." ".$row5['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row5['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row5['Job'] .  '</p> ';
         if(empty($row5['Daira'])&&empty($row5['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row5['Wilaya'].'</span></p> </div> </div>';
         if(!empty($row5['Daira'])&&empty($row5['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row5['Wilaya'].','.$row5['Daira'].'</span></p> </div> </div>';
		if(!empty($row5['Daira'])&&!empty($row5['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row5['Wilaya'].','.$row5['Daira'].','.$row5['Commune'].'</span> </p> </div> </div>';
                                      
									  array_push($arr,$row5['id']);
				                 	  }}
		                                
										}     
										}



						  
						  
						




















									 $words=explode(" ",$Name);
									 
                                      foreach ($words as $word ){
			  						  if (strlen($word)>2){
                                      $firstChar = mb_substr($word, 0, 1, "UTF-8");

									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($word);
									   
                                       $soundex= metaphone($en_word_2);
                                       }
									  
									  else $soundex =metaphone($word);
									  
									  $firstChar = mb_substr($soundex, 0, 1, "UTF-8");
									  
									  if(in_array($firstChar, $carc))
									  $soundex = substr($soundex, 1);
									  
									  
                                      
//*********************** NAME EXIST // name andd daira andd ccommune exissts ************************************
if(!empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql4="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
		else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
               $sql4="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job'  ";
			   else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
                      $sql4="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Wilaya='$Wilaya'  ";
                       //********************************* name exxist .... dadira and commune not exissts
				         else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
                            $sql4="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' ";

                                      $sql4= $sql4." and  Type = 'worker' ";
	                                  $res4=mysqli_query($db,$sql4);


		                              if(!$res4){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res4)>0){

			                          while($row4=mysqli_fetch_assoc($res4)){
										  

						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row4['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
									  
									  if(($row4['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row4['id'].'" ><img src="imgs/'.$row4['id'].'/'.$row4['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row4['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row4['id'].'" class="name">  '. $row4['First_Name']." ".$row4['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row4['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row4['Job'] .  '</p> ';
         if(empty($row4['Daira'])&&empty($row4['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row4['Wilaya'].'</span></p> </div> </div>';
         if(!empty($row4['Daira'])&&empty($row4['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row4['Wilaya'].','.$row4['Daira'].'</span></p> </div> </div>';
		if(!empty($row4['Daira'])&&!empty($row4['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row4['Wilaya'].','.$row4['Daira'].','.$row4['Commune'].'</span> </p> </div> </div>';
                                      
									  array_push($arr,$row4['id']);
				                 	  }}
		                                
										}     
										}



						  }
					




					
						
                          							 
                                  if($count==0){
                                      
						              echo '<div class="resultcontainer"> ';
                                      echo ' <p id="noresult">no result found!</p>  </div> '; 
									  
									  $count =-5; 
									  }

										  
									  }
									
						

	                                 


                                     


 }


  
  
  
  
   if($count==0){ 
  
                                       $sql= "SELECT * FROM users";
	                                  $res=mysqli_query($db,$sql);

		                            	if(!$res){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res)>0){
                                      
			                          while($row1=mysqli_fetch_assoc($res))
				                      	  {
                                      
						             
	                                  echo'    <div class="resultcontainer">  ';
									  
                                      //echo'<a href="profile.php?id='.$row0['id'].'" ><img src="imgs/'.$row0['id'].'/'.$row0['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									   
									   if(($row1['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row1['id'].'" ><img src="imgs/'.$row1['id'].'/'.$row1['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row1['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row1['id'].'" class="name">  '. $row1['First_Name']." ".$row1['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row1['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row1['Job'] .  '</p> ';
									  
                                      if(empty($row1['Daira'])&&empty($row1['Commune']))
                                      echo '<p class="info"><span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row1['Wilaya'].'</span></p></div> </div>';
                                      if(!empty($row1['Daira'])&&empty($row1['Commune']))
                                       echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row1['Wilaya'].','.$row1['Daira'].'</span></p></div> </div>';
		                              if(!empty($row1['Daira'])&&!empty($row1['Commune']))
                                       echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top000000000000000: -2px;">'.$row1['Wilaya'].','.$row1['Daira'].','.$row1['Commune'].'</span> </p> </div> </div> ';
	
										  }
  
									  }
  
  
  
  }
  
  
  
  

?>
