<?php

$count=0;
$arr=array();
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


if(isset($_GET['page'])){
$page = $_GET['page'];
}
else {
$page=1;
}

function Show_Result($db,$res,&$count,&$arr,$page){

if($page==1)
$start_from = 1 ;
else
$start_from = ($page-1) * 30;


if(!$res){
echo "error".mysqli_error($db);
}
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_array($res)){

$flag=true ;

for($j=0;$j<count($arr);$j++)
if($arr[$j] == $row['id']){ 
$flag=false; 
}

if($flag){
$count++;
if(($count>=$start_from) && ($count<$start_from+30)){
echo'  <div class="resultcontainer">  ';
if(($row['Profile_Pic'])!="default.png")
echo'<a href="profile.php?id='.$row['id'].'" ><img src="imgs/'.$row['id'].'/'.$row['Profile_Pic'].'" alt="" class="resimg" ></a> ';
else
echo'<a href="profile.php?id='.$row['id'].'" > <img src="imgs/default.png" alt="" class="resimg" ></a> ';
echo'<div class="infocontainer"> ';
echo'<a href="profile.php?id='.$row['id'].'" class="name">  '. $row['First_Name']." ".$row['Last_Name'].'</a> ';

echo'<p class="info"> ' .$row['Job'] .  '</p> ';
if(empty($row['Daira'])&&empty($row['Commune']))
echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row['Wilaya'].'</span></p> ';
if(!empty($row['Daira'])&&empty($row['Commune']))
echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row['Wilaya'].','.$row['Daira'].'</span></p> ';
if(!empty($row['Daira'])&&!empty($row['Commune']))
echo '<p class="info"> <span style="font-size: 15px;margin: 5px;position: relative;top: -2px;">'.$row['Wilaya'].','.$row['Daira'].','.$row['Commune'].'</span> </p> ';
echo'<p class="info"> ' .$row['Phone']  .'</p> </div> </div>';

array_push($arr,$row['id']);
				                 	  }
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

 $Name= rtrim($Name);
 $Job=rtrim($Job);
 $Wilaya= rtrim($Wilaya);
 
 
 $firstChar = mb_substr($Name, 0, 1, "UTF-8");	
 if(!in_array($firstChar, $ligature_map)){
 $Name  =  mb_convert_case(mb_strtolower($Name), MB_CASE_TITLE, "UTF-8");
  }
  
 //echo  "**".$Name."**" ; 
  
if(empty($Name) && empty($Job) &&  empty($Wilaya)){
echo '<div class="resultcontainer"> ';
echo ' <p id="noresult"> لايوجد نتائج ! <br> رجاء ادخال المهنة و الولاية المعنية  <p>  </div> ';
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
Show_Result($db,$res1,$count,$arr,$page);


if($count==0){
echo '<div class="resultcontainer"> ';
echo ' <p id="noresult">لايوجد نتائج !</p>  </div> ';
$count=-5;
									  }

				  }
//-------------------------------------------------------- search by name ----------------------------------------------------------------------------------------------
else if(!empty($Name)){
	
if(!empty($Name) && !empty($Job) &&  !empty($Wilaya)){
$sql2="SELECT * FROM users m WHERE  (m.Username LIKE '%$Name%' || m.First_Name LIKE '%$Name%' || m.Last_Name LIKE '%$Name%' || (CONCAT(TRIM(m.First_Name), ' ', TRIM(m.Last_Name)) LIKE '%$Name%') ||(CONCAT(TRIM(m.Last_Name), ' ', TRIM(m.First_Name)) LIKE '%$Name%')) AND Job='$Job' AND Wilaya='$Wilaya' ";
$sql2_1="SELECT * FROM users m WHERE ( m.Job LIKE '%$Name%' || m.Wilaya LIKE '%$Name%' || m.Daira LIKE '%$Name%' || m.Commune LIKE '%$Name%'|| m.Description LIKE '%$Name%') AND Job='$Job' AND Wilaya='$Wilaya' ";
}
//************************************* Name andd ddaira exxist .... and commune not exxist
else if(!empty($Name) && !empty($Job) &&  empty($Wilaya)){
$sql2="SELECT * FROM users m WHERE  (m.Username LIKE '%$Name%' || m.First_Name LIKE '%$Name%' || m.Last_Name LIKE '%$Name%' || (CONCAT(TRIM(m.First_Name), ' ', TRIM(m.Last_Name)) LIKE '%$Name%') ||(CONCAT(TRIM(m.Last_Name), ' ', TRIM(m.First_Name)) LIKE '%$Name%')) AND Job='$Job'";
$sql2_1="SELECT * FROM users m WHERE ( m.Job LIKE '%$Name%' || m.Wilaya LIKE '%$Name%' || m.Daira LIKE '%$Name%' || m.Commune LIKE '%$Name%'|| m.Description LIKE '%$Name%') AND Job='$Job'";
}
else if(!empty($Name) && empty($Job) &&  !empty($Wilaya)){
$sql2="SELECT * FROM users m WHERE  (m.Username LIKE '%$Name%' || m.First_Name LIKE '%$Name%' || m.Last_Name LIKE '%$Name%' || (CONCAT(TRIM(m.First_Name), ' ', TRIM(m.Last_Name)) LIKE '%$Name%') ||(CONCAT(TRIM(m.Last_Name), ' ', TRIM(m.First_Name)) LIKE '%$Name%')) AND  Wilaya='$Wilaya' ";
$sql2_1="SELECT * FROM users m WHERE ( m.Job LIKE '%$Name%' || m.Wilaya LIKE '%$Name%' || m.Daira LIKE '%$Name%' || m.Commune LIKE '%$Name%'|| m.Description LIKE '%$Name%') AND  Wilaya='$Wilaya' ";
}
//********************************* name exxist .... dadira and commune not exissts
else if(!empty($Name) && empty($Job) &&  empty($Wilaya)){
$sql2="SELECT * FROM users m WHERE  (m.Username LIKE '%$Name%' || m.First_Name LIKE '%$Name%' || m.Last_Name LIKE '%$Name%' || (CONCAT(TRIM(m.First_Name), ' ', TRIM(m.Last_Name)) LIKE '%$Name%') ||(CONCAT(TRIM(m.Last_Name), ' ', TRIM(m.First_Name)) LIKE '%$Name%')) ";
$sql2_1="SELECT * FROM users m WHERE ( m.Job LIKE '%$Name%' || m.Wilaya LIKE '%$Name%' || m.Daira LIKE '%$Name%' || m.Commune LIKE '%$Name%'|| m.Description LIKE '%$Name%') ";
}
$sql2= $sql2."AND  Type='worker'";
$sql2_1= $sql2_1."AND  Type='worker'";

$res2=mysqli_query($db,$sql2);
Show_Result($db,$res2,$count,$arr,$page);



//********************************************************* explode name *********************************************************************************************************

$words=explode(" ",$Name);
$arrsql=array (  ) ;
foreach($words as $word ){
 if(strlen($word)>3){

if(!empty($Name) && !empty($Job) &&  !empty($Wilaya)){
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' ) AND Job='$Job' AND Wilaya='$Wilaya'";
$sql3_1="SELECT * FROM users WHERE  ( Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$word%') AND Job='$Job' AND Wilaya='$Wilaya'";
}
//************************************* Name andd ddaira exxist .... and commune not exxist
else if(!empty($Name) && !empty($Job) &&  empty($Wilaya)){
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' ) AND Job='$Job'";
$sql3_1="SELECT * FROM users WHERE  ( Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$word%') AND Job='$Job'";
}
else if(!empty($Name) && empty($Job) &&  !empty($Wilaya)){
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' ) AND Wilaya='$Wilaya'";
$sql3_1="SELECT * FROM users WHERE  ( Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$word%') AND Wilaya='$Wilaya'";
}
//********************************* name exxist .... dadira and commune not exissts
else if(!empty($Name) && empty($Job) &&  empty($Wilaya)){
$sql3="SELECT * FROM users WHERE  (Username LIKE '%$word%' || First_Name LIKE '%$word%' || Last_Name LIKE '%$word%' )  ";
$sql3_1="SELECT * FROM users WHERE  ( Job LIKE '%$word%' || Wilaya LIKE '%$word%' || Daira LIKE '%$word%' || Commune LIKE '%$word%'|| Description LIKE '%$word%') ";
}

$sql3= $sql3."AND  Type='worker'";
$sql3_1= $sql3_1."AND  Type='worker'";

$arrR = array($sql3,$sql3_1);

array_push($arrsql,$arrR);

}
}


for($i=0;$i<count($arrsql);$i++){
$res3=mysqli_query($db,$arrsql[$i][0]);
Show_Result($db,$res3,$count,$arr,$page);
}



$res2_1=mysqli_query($db,$sql2_1);
Show_Result($db,$res2_1,$count,$arr,$page);



for($i=0;$i<count($arrsql);$i++){
$res3_1=mysqli_query($db,$arrsql[$i][1]);
Show_Result($db,$res3_1,$count,$arr,$page);
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

/*
//-------- inv name ------------
$words=explode(" ",$Name);
$soundex2 =" " ; 
for($i=$words[count($words)-1] ;$i<0;$i--){
	
$firstChar = mb_substr($words[$i], 0, 1, "UTF-8");
if(in_array($firstChar, $ligature_map)){
$en_word_2 = $obj->ar2en($words[$i]);
$soundex2 .= " ".metaphone($en_word_2);
}
else $soundex2 .= " ".metaphone($words[$i]);

}

$firstChar = mb_substr($soundex2, 0, 1, "UTF-8");
if(in_array($firstChar, $carc))
$soundex2 = substr($soundex2, 1);

*/

//*********************** NAME EXIST // name andd daira andd ccommune exissts ************************************
if(!empty($Name) && !empty($Job) &&  !empty($Wilaya))
$sql5="SELECT * FROM users WHERE  (indexing LIKE '%$soundex%' ) AND Job='$Job' AND Wilaya='$Wilaya' ";
//************************************* Name andd ddaira exxist .... and commune not exxist
else if(!empty($Name) && !empty($Job) &&  empty($Wilaya))
$sql5="SELECT * FROM users WHERE  (indexing LIKE '%$soundex%') AND Job='$Job'  ";
else if(!empty($Name) && empty($Job) &&  !empty($Wilaya))
$sql5="SELECT * FROM users WHERE  (indexing LIKE '%$soundex%') AND Wilaya='$Wilaya'  ";
//********************************* name exxist .... dadira and commune not exissts
else if(!empty($Name) && empty($Job) &&  empty($Wilaya))
$sql5="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' ";

$sql5= $sql5." AND Type = 'worker' ";
$res5=mysqli_query($db,$sql5);
Show_Result($db,$res5,$count,$arr,$page);

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

$sql4= $sql4." AND  Type = 'worker' ";
$res4=mysqli_query($db,$sql4);

Show_Result($db,$res4,$count,$arr,$page);

										}
						  }


	/*					 //$q= $sql2.$sql3.$sql4.$sql5;
						//$resx = mysqli_multi_query($db,$q) ;

//echo 		mysqli_query($db,$sql4);
$res2 = array_filter($res2);
$res3 = array_filter($res3);
$res4 = array_filter($res4);
$res5= array_filter($res5);

$resx = (object) array_merge((array) json_decode($res2), (array) json_decode($res3), (array) json_decode($res4) ,(array) json_decode($res5));
//$resx = (object) array_merge_recursive((array) $res2, (array) $res3, (array) $res4 ,(array) $res5);
//$q=$sql2 ."UNION ALL" . $sql3 .  "UNION ALL" . $sql4 . "UNION ALL" . $sql5 ;
//$res=mysqli_query($db,$q);
//var_dump($resx);


$a = (object) array_merge_recursive((array) json_decode($res2), (array) json_decode($res3));
$b = (object) array_merge_recursive((array) json_decode($res4), (array) json_decode($res5));
$c = (object) array_merge_recursive((array) json_decode($a), (array) json_decode($b));

try {
Show_Result($db,$c,$count,$arr);
}
catch (mysqli_sql_exception $e) {
      var_dump($e);
      exit;
   } */

if($count==0){
echo '<div class="resultcontainer"> ';
echo ' <p id="noresult">لايوجد نتائج !!</p>  </div> ';
$count =-5;
									  }



									 }





 /*
$results_per_page = 30; // number of results per page
$total_pages = (int) $count/$results_per_page ;
for($i=1; $i<=$total_pages; $i++) {

	echo "<div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".$i."'>".$i."</a> </div> ";

}


 */



$results_per_page = 30; // number of results per page
$total_pages =  (int) $count/$results_per_page ;
if(!is_int($total_pages))
$total_pages = (int) ($total_pages+1) ;


if($page <10 ){

if($total_pages<10)
for($i=1; $i<=$total_pages; $i++) {
echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".$i."'>".$i."</a>   </div>  ";
}
else{
for($i=1; $i<=10; $i++) {
echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".$i."'>".$i."</a>   </div>  ";
}
//if($page==9)
//echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=10'>10</a>   </div>  ";
 echo " <div class='record'> ... </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".$total_pages."'>".$total_pages."</a>   </div>  ";
 }
}
else if($page<=($total_pages-10)){

//if($page<=$total_pages && $page<=$total_pages )
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=1'>1</a>   </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=2'>2</a>   </div>  ";

  echo " <div class='record'> ... </div>  ";
 for($i=$page-3; $i<=$page+3; $i++) {
echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".$i."'>".$i."</a>   </div>  ";
}

 echo " <div class='record'> ... </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".($total_pages-1)."'>".($total_pages-1)."</a>   </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".$total_pages."'>".$total_pages."</a>   </div>  ";

  }
  else {


  if($page>12){
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=1'>1</a>   </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=2'>2</a>   </div>  ";
 echo " <div class='record'> ... </div>  ";
 }

 for($i=$total_pages-10; $i<=$total_pages; $i++) {
 echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=".$i."'>".$i."</a>   </div>  ";
   }

  }




 }
 //******************************************** show all users *********************************************************

 else
 if($count==0){
 $sql= "SELECT * FROM users";
 $res=mysqli_query($db,$sql);
 
 Show_Result($db,$res,$count,$arr,$page);
 

$results_per_page = 30; // number of results per page
$total_pages =  $count/$results_per_page ;
if(!is_int($total_pages))
$total_pages = (int) $total_pages+1 ;


if($page <10 ){

if($total_pages<10)
for($i=1; $i<=$total_pages; $i++) {
echo " <div class='record'> <a class='pagen' href='search.php?page=".$i."'>".$i."</a>   </div>  ";
}
else{
for($i=1; $i<=10; $i++) {
echo " <div class='record'> <a class='pagen' href='search.php?page=".$i."'>".$i."</a>   </div>  ";
}
//if($page==9)
//echo " <div class='record'> <a class='pagen' href='search.php?search=".$_GET['search']."&Job=".$_GET['Job']."&Wilaya=".$_GET['Wilaya']."&recherche=بحث&page=10'>10</a>   </div>  ";
 echo " <div class='record'> ... </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?page=".$total_pages."'>".$total_pages."</a>   </div>  ";
 }
}

else if($page<=($total_pages-10)){
//if($page<=$total_pages && $page<=$total_pages )
 echo " <div class='record'> <a class='pagen' href='search.php?page=1'>1</a>   </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?page=2'>2</a>   </div>  ";

 echo " <div class='record'> ... </div>  ";
 for($i=$page-3; $i<=$page+3; $i++) {
 echo " <div class='record'> <a class='pagen' href='search.php?page=".$i."'>".$i."</a>   </div>  ";
 }

 echo " <div class='record'> ... </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?page=".($total_pages-1)."'>".($total_pages-1)."</a>   </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?page=".$total_pages."'>".$total_pages."</a>   </div>  ";

  }
  else {


 echo " <div class='record'> <a class='pagen' href='search.php?page=1'>1</a>   </div>  ";
 echo " <div class='record'> <a class='pagen' href='search.php?page=2'>2</a>   </div>  ";
 echo " <div class='record'> ... </div>  ";

 for($i=$total_pages-10; $i<=$total_pages; $i++) {
echo " <div class='record'> <a class='pagen' href='search.php?page=".$i."'>".$i."</a>   </div>  ";
}





  }




  }




?>
