<?php

include('../conn.php');




function unichr($u) 
{
     return mb_convert_encoding('&#' . intval($u) . ';', 'UTF-8', 'HTML-ENTITIES');
}

/**
 * A map of Arabic attached forms of characters to original characters
 */
$ligature_map = array(
  unichr(0xFE80) => unichr(0x0621), 
  unichr(0xFE81) => unichr(0x0622), unichr(0xFE82) => unichr(0x0622), 
  unichr(0xFE83) => unichr(0x0623), unichr(0xFE84) => unichr(0x0623), 
  unichr(0xFE85) => unichr(0x0624), unichr(0xFE86) => unichr(0x0624), 
  unichr(0xFE87) => unichr(0x0625), unichr(0xFE88) => unichr(0x0625), 
  unichr(0xFE89) => unichr(0x0626), unichr(0xFE8B) => unichr(0x0626), 
  unichr(0xFE8C) => unichr(0x0626), unichr(0xFE8A) => unichr(0x0626), 
  unichr(0xFE8D) => unichr(0x0627), unichr(0xFE8E) => unichr(0x0627), 
  unichr(0xFE8F) => unichr(0x0628), unichr(0xFE91) => unichr(0x0628), 
  unichr(0xFE92) => unichr(0x0628), unichr(0xFE90) => unichr(0x0628), 
  unichr(0xFE93) => unichr(0x0629), unichr(0xFE94) => unichr(0x0629), 
  unichr(0xFE95) => unichr(0x062A), unichr(0xFE97) => unichr(0x062A), 
  unichr(0xFE98) => unichr(0x062A), unichr(0xFE96) => unichr(0x062A), 
  unichr(0xFE99) => unichr(0x062B), unichr(0xFE9B) => unichr(0x062B), 
  unichr(0xFE9C) => unichr(0x062B), unichr(0xFE9A) => unichr(0x062B), 
  unichr(0xFE9D) => unichr(0x062C), unichr(0xFE9F) => unichr(0x062C), 
  unichr(0xFEA0) => unichr(0x062C), unichr(0xFE9E) => unichr(0x062C), 
  unichr(0xFEA1) => unichr(0x062D), unichr(0xFEA3) => unichr(0x062D), 
  unichr(0xFEA4) => unichr(0x062D), unichr(0xFEA2) => unichr(0x062D), 
  unichr(0xFEA5) => unichr(0x062E), unichr(0xFEA7) => unichr(0x062E), 
  unichr(0xFEA8) => unichr(0x062E), unichr(0xFEA6) => unichr(0x062E), 
  unichr(0xFEA9) => unichr(0x062F), unichr(0xFEAA) => unichr(0x062F), 
  unichr(0xFEAB) => unichr(0x0630), unichr(0xFEAC) => unichr(0x0630), 
  unichr(0xFEAD) => unichr(0x0631), unichr(0xFEAE) => unichr(0x0631), 
  unichr(0xFEAF) => unichr(0x0632), unichr(0xFEB0) => unichr(0x0632), 
  unichr(0xFEB1) => unichr(0x0633), unichr(0xFEB3) => unichr(0x0633), 
  unichr(0xFEB4) => unichr(0x0633), unichr(0xFEB2) => unichr(0x0633), 
  unichr(0xFEB5) => unichr(0x0634), unichr(0xFEB7) => unichr(0x0634), 
  unichr(0xFEB8) => unichr(0x0634), unichr(0xFEB6) => unichr(0x0634), 
  unichr(0xFEB9) => unichr(0x0635), unichr(0xFEBB) => unichr(0x0635), 
  unichr(0xFEBC) => unichr(0x0635), unichr(0xFEBA) => unichr(0x0635), 
  unichr(0xFEBD) => unichr(0x0636), unichr(0xFEBF) => unichr(0x0636), 
  unichr(0xFEC0) => unichr(0x0636), unichr(0xFEBE) => unichr(0x0636), 
  unichr(0xFEC1) => unichr(0x0637), unichr(0xFEC3) => unichr(0x0637), 
  unichr(0xFEC4) => unichr(0x0637), unichr(0xFEC2) => unichr(0x0637), 
  unichr(0xFEC5) => unichr(0x0638), unichr(0xFEC7) => unichr(0x0638), 
  unichr(0xFEC8) => unichr(0x0638), unichr(0xFEC6) => unichr(0x0638), 
  unichr(0xFEC9) => unichr(0x0639), unichr(0xFECB) => unichr(0x0639), 
  unichr(0xFECC) => unichr(0x0639), unichr(0xFECA) => unichr(0x0639), 
  unichr(0xFECD) => unichr(0x063A), unichr(0xFECF) => unichr(0x063A), 
  unichr(0xFED0) => unichr(0x063A), unichr(0xFECE) => unichr(0x063A), 
  unichr(0x0640) => unichr(0x0640), 
  unichr(0xFED1) => unichr(0x0641), unichr(0xFED3) => unichr(0x0641), 
  unichr(0xFED4) => unichr(0x0641), unichr(0xFED2) => unichr(0x0641), 
  unichr(0xFED5) => unichr(0x0642), unichr(0xFED7) => unichr(0x0642), 
  unichr(0xFED8) => unichr(0x0642), unichr(0xFED6) => unichr(0x0642), 
  unichr(0xFED9) => unichr(0x0643), unichr(0xFEDB) => unichr(0x0643), 
  unichr(0xFEDC) => unichr(0x0643), unichr(0xFEDA) => unichr(0x0643), 
  unichr(0xFEDD) => unichr(0x0644), unichr(0xFEDF) => unichr(0x0644), 
  unichr(0xFEE0) => unichr(0x0644), unichr(0xFEDE) => unichr(0x0644), 
  unichr(0xFEE1) => unichr(0x0645), unichr(0xFEE3) => unichr(0x0645), 
  unichr(0xFEE4) => unichr(0x0645), unichr(0xFEE2) => unichr(0x0645), 
  unichr(0xFEE5) => unichr(0x0646), unichr(0xFEE7) => unichr(0x0646), 
  unichr(0xFEE8) => unichr(0x0646), unichr(0xFEE6) => unichr(0x0646), 
  unichr(0xFEE9) => unichr(0x0647), unichr(0xFEEB) => unichr(0x0647), 
  unichr(0xFEEC) => unichr(0x0647), unichr(0xFEEA) => unichr(0x0647), 
  unichr(0xFEED) => unichr(0x0648), unichr(0xFEEE) => unichr(0x0648), 
  unichr(0xFEEF) => unichr(0x0649), unichr(0xFEF0) => unichr(0x0649), 
  unichr(0xFEF1) => unichr(0x064A), unichr(0xFEF3) => unichr(0x064A), 
  unichr(0xFEF4) => unichr(0x064A), unichr(0xFEF2) => unichr(0x064A) 
);


 
 error_reporting(E_ERROR);
 require 'vendor/autoload.php';
 $obj = new \ArPHP\I18N\Arabic();
//----------------------- get colomun -------------------------
     $sql1="select * from users ";
	 $res1=mysqli_query($db,$sql1);
  if(!$res1){
	  echo "error".mysqli_error($db);
            }
//---------------------- update indexing colomun by row ---------------
  while($row=mysqli_fetch_assoc($res1)){
	  $soundex=" " ;

 //-------------------------------
	  if($row['First_Name']!=null){
		  $words=explode(" ",$row['First_Name']);
		  foreach ($words as $word) {
			   
                                      $firstChar = mb_substr($word, 0, 1, "UTF-8");
									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($word);
									   
                                       $soundex .=" ".metaphone($en_word_2);
                                       }
									  
									  else $soundex.=" ". metaphone($word);
									  
									  
									  

		                           }
	                    }
	   
  //-------------------------------
	  if($row['Last_Name']!=null){
		  $words=explode(" ",$row['Last_Name']);
		  foreach ($words as $word) {
			   
                                      $firstChar = mb_substr($word, 0, 1, "UTF-8");
									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($word);
									   
                                       $soundex .=" ".metaphone($en_word_2);
                                       }
									  
									  else $soundex.=" ". metaphone($word);
									  
									  
									  

		                           }
	                    }
	 

  //-------------------------------
	  if($row['Username']!=null){
		  $words=explode(" ",$row['Username']);
		  foreach ($words as $word) {
			   
                                      $firstChar = mb_substr($word, 0, 1, "UTF-8");
									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($word);
									   
                                       $soundex .=" ".metaphone($en_word_2);
                                       }
									  
									  else $soundex.=" ". metaphone($word);
									  
									  
									  

		                           }
	                    }
	    		
	   //---------------------------------------------
	  if($row['Job']!=null){
		  $words=explode(" ",$row['Job']);
		  foreach ($words as $word) {
			   
                                      $firstChar = mb_substr($word, 0, 1, "UTF-8");
									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($word);
									   
                                       $soundex .=" ".metaphone($en_word_2);
                                       }
									  
									  else $soundex.=" ". metaphone($word);
									  
									  
									  

		                           }
	                    }
	 
	   //----------------------------------------------
	   if($row['Wilaya']!=null){
		  $words=explode(" ",$row['Wilaya']);
		  foreach ($words as $word) {
			   
                                      $firstChar = mb_substr($word, 0, 1, "UTF-8");
									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($word);
									   
                                       $soundex .=" ".metaphone($en_word_2);
                                       }
									  
									  else $soundex.=" ". metaphone($word);
									  
									  
									  

		                           }
	                    }
	 
						  //-------------------------------
	  if($row['Email']!=null){
		  $words=explode(" ",$row['Email']);
		  foreach ($words as $word) {
			   
                                      $firstChar = mb_substr($word, 0, 1, "UTF-8");
									  
                                      if(in_array($firstChar, $ligature_map)){
									   $en_word_2 = $obj->ar2en($word);
									   
                                       $soundex .=" ".metaphone($en_word_2);
                                       }
									  
									  else $soundex.=" ". metaphone($word);
									  
									  
									  

		                           }
	                    }
	 
						
	 $id=$row['id'];
	 $sql2="UPDATE users SET indexing='$soundex' where id=$id";
	 $res2=mysqli_query($db,$sql2);
	 if(!$res2){
	 echo "error".mysqli_error($db);
               }
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 if(isset($_GET['recherche'])) {
 $Name = mysqli_real_escape_string($db,$_GET['search']);
 $Job = mysqli_real_escape_string($db,$_GET['Job']);
 $Wilaya =mysqli_real_escape_string($db,$_GET['Wilaya']);

 $count=0;
 $arr=array();
 
 
 $carc=array("o","O","a","A","i","I","e","E");  

 
 if(empty($Name) && empty($Job) &&  empty($Wilaya)){
				      echo '<div class="resultcontainer"> ';
                      echo ' <p id="noresult"> no result found! <br> Please ENter Wilaya ANd Job  <p>  </div> '; 
					  
					  exit ; }
	              

				  else if (empty($Name)){
	        //********************************* Empty Name ****************************************
	             if(empty($Name) && !empty($Job) &&  !empty($Wilaya))
			     $sql0="SELECT * FROM users WHERE  Job='$Job' AND Wilaya='$Wilaya' ";
			          else if(empty($Name) && !empty($Job) &&  empty($Wilaya))
				        $sql0="SELECT * FROM users WHERE  Job='$Job'  ";
				              else if(empty($Name) && empty($Job) &&  !empty($Wilaya))
						        $sql0="SELECT * FROM users WHERE Wilaya='$Wilaya' ";

	                                  $res0=mysqli_query($db,$sql0);

		                            	if(!$res0){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res0)>0){

			                          while($row0=mysqli_fetch_assoc($res0))
				                      	  {

						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row0['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
									  
                                      //echo'<a href="profile.php?id='.$row0['id'].'" ><img src="imgs/'.$row0['id'].'/'.$row0['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									   
									   if(($row0['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row0['id'].'" ><img src="imgs/'.$row0['id'].'/'.$row0['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row0['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row0['id'].'" class="name">  '. $row0['First_Name']." ".$row0['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row0['Phone'] .  '</p> ';
                        if(empty($row0['Daira'])&&empty($row0['Commune']))
         echo '<p class="info"><span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row0['Wilaya'].'</span></p></div> </div>';
         if(!empty($row0['Daira'])&&empty($row0['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row0['Wilaya'].','.$row0['Daira'].'</span></p></div> </div>';
		if(!empty($row0['Daira'])&&!empty($row0['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row0['Wilaya'].','.$row0['Daira'].','.$row0['Commune'].'</span> </p> </div> </div> ';
		
                                      array_push($arr,$row0['id']);
				                 	  }}
		                                }
										
										
										
										if($count==0){
                                      
						              echo '<div class="resultcontainer"> ';
                                      echo ' <p id="noresult">no result found!</p>  </div> '; 
									  }
					               
				  }
		   

			              else if(!empty($Name)){
							  
							     
//////////////////////////////







                                     /* $sql1="SELECT * FROM users WHERE  First_Name LIKE '%$Name%' or Last_Name LIKE '%$Name%'  or Job LIKE '%$Name%' or Wilaya LIKE '%$Name%' or Username LIKE '%$Name%'";
	                                   $sql1="SELECT * FROM users WHERE  First_Name LIKE '%$Name%' ";
	     
									  $res1=mysqli_query($db,$sql1);							  
		                              if(!$res1){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res1)>0){

			                          while($row1=mysqli_fetch_assoc($res1)){
										  
						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row1['id']){ $flag=false ; }
									  
									  
						              if($flag){
										  $count++
										  
	                                  echo'  <div class="resultcontainer">  ';
									  
									  if(($row1['Profile_Pic'])!="default.png")
                                      echo'<a href="profile.php?id='.$row1['id'].'" ><img src="imgs/'.$row1['id'].'/'.$row1['Profile_Pic'].'" alt="" class="resimg" ></a> ';
									  else 
									  echo'<a href="profile.php?id='.$row1['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
									  
									  
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row1['id'].'" class="name">  '. $row1['First_Name']." ".$row1['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row1['Phone'] .  '</p> ';
									  echo'<p class="info"> ' .$row1['Job'] .  '</p> ';
									  
         if(empty($row1['Daira'])&&empty($row1['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row1['Wilaya'].'</span></p> </div> </div>';
         if(!empty($row1['Daira'])&&empty($row1['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row1['Wilaya'].','.$row1['Daira'].'</span></p> </div> </div>';
		if(!empty($row1['Daira'])&&!empty($row1['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row1['Wilaya'].','.$row1['Daira'].','.$row1['Commune'].'</span> </p> </div> </div>';
                                      
									  array_push($arr,$row1['id']);
				                 	  }}
		                                
										} 
                                      
									  
									  */
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
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
$sql3="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
		else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
               $sql3="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job'  ";
			   else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
                      $sql3="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Wilaya='$Wilaya'  ";
                       //********************************* name exxist .... dadira and commune not exissts
				         else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
                            $sql3="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' ";


	                                  $res=mysqli_query($db,$sql3);


		                              if(!$res){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res)>0){

			                          while($row2=mysqli_fetch_assoc($res)){
										  

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
									  
         if(empty($row2['Daira'])&&empty($row2['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row2['Wilaya'].'</span></p> </div> </div>';
         if(!empty($row2['Daira'])&&empty($row2['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row2['Wilaya'].','.$row2['Daira'].'</span></p> </div> </div>';
		if(!empty($row2['Daira'])&&!empty($row2['Commune']))
         echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row2['Wilaya'].','.$row2['Daira'].','.$row2['Commune'].'</span> </p> </div> </div>';
                                      
									  array_push($arr,$row2['id']);
				                 	  }}
		                                
										}     
										}



						  }
						  
						
                          							 
  if($count==0){
                                      
						              echo '<div class="resultcontainer"> ';
                                      echo ' <p id="noresult">no result found!</p>  </div> '; 
									  }

										  
									  }
									
						

	                                 }


                                     





  
  
  
  
  
  
  
  
  
  
  

?>
