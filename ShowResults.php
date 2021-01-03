<?php

$count=0;
$arr=array();
  
  
function Show_Result($db,$res,&$count,&$arr){
	
if(!$res){
echo "error".mysqli_error($db);                                       }
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
$flag=true ;
for($j=0;$j<count($arr);$j++)
if($arr[$j]==$row['id']){ $flag=false ; }
if($flag){
$count++;
echo'  <div class="resultcontainer">  ';
if(($row['Profile_Pic'])!="default.png")
echo'<a href="profile.php?id='.$row['id'].'" ><img src="imgs/'.$row['id'].'/'.$row['Profile_Pic'].'" alt="" class="resimg" ></a> ';
else 
echo'<a href="profile.php?id='.$row['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';								  
echo'<div class="infocontainer"> ';
echo'<a href="profile.php?id='.$row['id'].'" class="name">  '. $row['First_Name']." ".$row['Last_Name'] . ' </a>  ';

echo'<p class="info"> ' .$row['Job'] .  '</p> ';
if(empty($row['Daira'])&&empty($row['Commune']))
echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row['Wilaya'].'</span></p> ';
if(!empty($row['Daira'])&&empty($row['Commune']))
echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row['Wilaya'].','.$row['Daira'].'</span></p> ';
if(!empty($row['Daira'])&&!empty($row['Commune'])) 
echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row['Wilaya'].','.$row['Daira'].','.$row['Commune'].'</span> </p> ';                                     
echo'<p class="info"> ' .$row['Phone'] .  '</p> </div> </div>';
array_push($arr,$row['id']);
				                 	  }
									  } 
									  }     
  }   
  
 if(isset($_GET['recherche'])) {
//*************************************************** get values from inputs *****************************************************************
 $Name = mysqli_real_escape_string($db,$_GET['search']);
 $Job = mysqli_real_escape_string($db,$_GET['Job']);
 $Wilaya =mysqli_real_escape_string($db,$_GET['Wilaya']);
 $carc=array("o","O","a","A","i","I","e","E");  
 
 
if(empty($Name) && empty($Job) &&  empty($Wilaya)){
echo '<div class="resultcontainer"> ';
echo ' <p id="noresult"> no result found! <br> Please ENter Wilaya ANd Job  <p>  </div> '; 
exit ; }
	              
//********************************************************** Empty Name ****************************************************************************************************************
else if (empty($Name)){
if(empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql1="SELECT * FROM users WHERE  Job='$Job' AND Wilaya='$Wilaya'";
else if(empty($Name) && !empty($Job) &&  empty($Wilaya))
$sql1="SELECT * FROM users WHERE  Job='$Job'";
else if(empty($Name) && empty($Job) &&  !empty($Wilaya))
$sql1="SELECT * FROM users WHERE Wilaya='$Wilaya'";

$sql1= $sql1." AND Type ='worker'";	                                 
$res1=mysqli_query($db,$sql1);
Show_Result($db,$res1,$count,$arr);
									
if($count==0){                                    
echo '<div class="resultcontainer"> ';
echo ' <p id="noresult">no result found!</p>  </div> '; 
$count=-5;
									  }
				             
				  }
//-------------------------------------------------------- search by name ----------------------------------------------------------------------------------------------
else if(!empty($Name)){     
if(!empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%'|| Description LIKE '%$Name%') AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
$sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%'|| Description LIKE '%$Name%' )AND Job='$Job'  ";
else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
$sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%' || Description LIKE '%$Name%')AND Wilaya='$Wilaya'  ";
//********************************* name exxist .... dadira and commune not exissts
else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
$sql2="SELECT * FROM users WHERE  (Username LIKE '%$Name%' || First_Name LIKE '%$Name%' || Last_Name LIKE '%$Name%' || Job LIKE '%$Name%' || Wilaya LIKE '%$Name%' || Daira LIKE '%$Name%' || Commune LIKE '%$Name%'|| Description LIKE '%$Name%' )";
												
$sql2= $sql2." and  Type = 'worker' ";
					
$res2=mysqli_query($db,$sql2);
Show_Result($db,$res2,$count,$arr);
//------------------------------------------------------------explode name -----------------------------------------------------------------------------------------------									  
$words=explode(" ",$Name);
									 
foreach ($words as $word ){
			  						 
if(!empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$Word%') AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$Word%') AND Job='$Job'  ";
else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$Word%') AND Wilaya='$Wilaya'  ";
//********************************* name exxist .... dadira and commune not exissts
else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
$sql3="SELECT * FROM users WHERE (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' || Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$Word%')  ";

$sql3= $sql3." and  Type = 'worker' ";
$res3=mysqli_query($db,$sql3);
Show_Result($db,$res3,$count,$arr);	 

}
//------------------------------------------------------------- search by soundexx metaphone ------------------------------------------------------------------------------------									  
									 
if (strlen($Name)>2){									  
$firstChar = mb_substr($Name, 0, 1, "UTF-8");								  
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($Name);
$soundex= metaphone($en_word_2);	}								  
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
Show_Result($db,$res5,$count,$arr);
										
										}
//--------------------------------------------------------- explode name and use soundex  metaphone ----------------------------------------------------------------------------------------------------------------
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
									  
Show_Result($db,$res4,$count,$arr);
										}
						  }			 
if($count==0){                                     
echo '<div class="resultcontainer"> ';
echo ' <p id="noresult">no result found!</p>  </div> '; 			  
$count =-5; 
									  }
									  }
 //******************************************** show all users **********************************************************
 
 }
 
 
 else 
 if($count==0){ 
 $sql= "SELECT * FROM users";
 $res=mysqli_query($db,$sql);
 Show_Result($db,$res,$count,$arr);
  }

?>
