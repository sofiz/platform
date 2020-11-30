<?php
session_start();
require 'vendor/autoload.php';
include('update indexing.php');








?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" href="search.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="data.js"></script>
  </head>

  <body>
  <?php include('topbar.php'); ?>
<form action="search.php" method="post">


    <div class="searchbar">
    <input type="text" name="search" placeholder="search" class="searchinput">
    <div id="myDIV">
      <select class="dropdown" name="Job" >
	  <option value="" selected>ابحث عن</option>
	   <option value="بناء">بناء</option>
	   <option value="لحام">لحام</option>
	   <option value="ميكانيك السيارات">ميكانيك السيارات</option>
	   <option value="دهان">دهان</option>
	   <option value="خياطة">خياطة</option>
	   <option value="تصليح الاحدية">تصليح الاحدية </option>
	   <option value="ةنجار">ةنجار</option>
	   <option value="ةنجار">حلاقة رجال</option>
	   <option value="كهرباء معماربة">كهرباء معماربة  </option>
	   <option value="">الحدادة</option>
	   <option value="">التركيب الصحي والغاز</option>
	   <option value="">التدفئة المركزية</option>
	   <option value="">نجارة الالمنيوم و المواد البلاستيكية </option>
	   <option value="">المطالة هياكل السيارات</option>
	    <option value="">التجهيز و التأثيث الداخلي للمركبات</option>
		 <option value="">كهرباء السيارات</option>
		  <option value="">الكهرباء الصناعية</option>
		   <option value="">تركيب و صيانة أجهزة التبريد و التكييف</option>
		    <option value="">الكهروميكانيكية</option>
			 <option value="">صيانة المصاعد</option>
			  <option value="">تركيب الألواح الشمسية، الضوئية و الحرارية</option>
			   <option value="">تركيب وصيانة أنظمة الإنذار والمراقبة بالفيديو</option>
			    <option value="">صناعة الحلويات</option>

				 <option value="">الخبازة و والفطائر</option>
				  <option value="">الجزارة و منتجات اللحوم</option>
				   <option value="">إنتاج أغذية الحيوانات</option>
				    <option value="">تصليح الهواتف الثابتة و النقالة</option>
					 <option value="">ِلاقة النساء</option>
					  <option value="">تركيب و تصليح الـنظارات</option>
					   <option value="">التجميل</option>
					    <option value="">ميكانيك تصليح قوارب الصيد واليخت</option>
						 <option value="">ميكانيك تصليح مركبات الوزن الخفيف</option>
						  <option value="">922</option>
     </select>

    </div>














<script>



//************************** for wilaya *******************

var myParent = document.getElementById("myDIV")
//Create and append select list
var selectList = document.createElement("select");
selectList.id = "mySelectwilaya";
myParent.appendChild(selectList);
document.getElementById("mySelectwilaya").classList.add('dropdown');

//*************** default ********
var option = document.createElement("option");
    option.value = "" ;
    option.text = "اختر ولاية" ;
	option.selected = "selected";
	selectList.appendChild(option);
//Create and append the options



for (i in arr.wilayas) {


   var option = document.createElement("option");
    option.value = i ;
    option.text = arr.wilayas[i].name_ar;
    selectList.appendChild(option);


}
document.getElementById("mySelectwilaya").options[0].disabled = true;
/////****************************** for daira ***************
var myParent2 = document.getElementById("myDIV")
//Create and append select list
var selectList2 = document.createElement("select");
selectList2.id = "mySelectdaira";
myParent2.appendChild(selectList2);
document.getElementById("mySelectdaira").classList.add('dropdown');



//*************** default ********
var option = document.createElement("option");
    option.value = "" ;
    option.text = "اختر دائرة" ;
	option.selected = "selected";
	selectList2.appendChild(option);



 var wilayacode;
 var dairacode ;


  $(document).ready(function(){


    $("#mySelectwilaya").change(function(){
        wilayacode = $(this).children("option:selected").val();
		//********* set value of wilaya in input ********

		 document.getElementById("Wilaya").value= arr.wilayas[wilayacode].name_ar;
        // document.getElementById("Wilayacode").value= wilayacode ;
        //alert("You have selected wilaya - " + wilayacode);

        $('#mySelectdaira').find('option:not(:first)').remove();
		$('#mySelectcommune').find('option:not(:first)').remove();

		for (j in arr.wilayas[wilayacode].dairas) {
		var option = document.createElement("option");
	option.value = j ;
    option.text = arr.wilayas[wilayacode].dairas[j].name_ar ;
    selectList2.appendChild(option);
           }


		   });   });
document.getElementById("mySelectdaira").options[0].disabled = true;
		   //****************************** for communes *******************
		   var myParent3 = document.getElementById("myDIV")
//Create and append select list
var selectList3 = document.createElement("select");
selectList3.id = "mySelectcommune";
myParent3.appendChild(selectList3);
document.getElementById("mySelectcommune").classList.add('dropdown');


//*************** default ********
var option = document.createElement("option");
    option.value = "" ;
    option.text = "اختر بلدية" ;
	option.selected = "selected";
	selectList3.appendChild(option);


	$(document).ready(function(){


    $("#mySelectdaira").change(function(){
        var dairacode = $(this).children("option:selected").val();
        //alert("You have selected wilaya - " + dairacode);
		//********* set value of wilaya in input ********

		 document.getElementById("Daira").value= arr.wilayas[wilayacode].dairas[dairacode].name_ar;


        $('#mySelectcommune').find('option:not(:first)').remove();

		for (k in arr.wilayas[wilayacode].dairas[dairacode].communes) {
		var option = document.createElement("option");
	option.value = k ;
    option.text = arr.wilayas[wilayacode].dairas[dairacode].communes[k].name_ar ;
    selectList3.appendChild(option);
           }
document.getElementById("mySelectcommune").options[0].disabled = true;

		   $(document).ready(function(){


    $("#mySelectcommune").change(function(){
        var communecode = $(this).children("option:selected").val();

		//********* set value of wilaya in input ********

		 document.getElementById("Commune").value= arr.wilayas[wilayacode].dairas[dairacode].communes[communecode].name_ar;


});   });

		   });   });



	</script>
	<input type="text" name="Wilaya"  value= "" class="searchbtn" id="Wilaya" hidden>
	<input type="text" name="Daira"  value= "" class="searchbtn" id="Daira"  hidden>
	<input type="text" name="Commune"  value= "" class="searchbtn" id="Commune"   hidden>



    </div>



    <input type="submit" name="recherche"  value= "recherche" class="searchbtn">




	 <?php $id=10;  ?>
				</form>



       <?php echo'<a href="profile.php?id='.$id.'"> profile</a>';  ?>
<?php
$errors = array();
$obj = new \ArPHP\I18N\Arabic();

// connect to the database
 include('conn.php');
 
  $x="اااااا" ;
 echo '<h1>'.ord($x).'</h1>';
 
 
 
 if (isset($_POST['recherche'])) {
 $Name =$_POST['search'];
 $Job = mysqli_real_escape_string($db,$_POST['Job']);
 $Wilaya =$_POST['Wilaya'];
 $Daira =$_POST['Daira'];
 $Commune =$_POST['Commune'];  
 
 
 $count=0;
 $arr=array();
 
 echo '<h1>'.$Name.'</h1>';
 echo '<h1>'.$Job.'</h1>';
 echo '<h1>'.$Wilaya.'</h1>';
 echo '<h1>'.$Daira.'</h1>';
 echo '<h1>'.$Commune.'</h1>';
  if(empty($Job)&& (empty($Wilaya)) )echo '<h1> please enter Job and wilaya  for better result </h1>';
      else if(empty($Wilaya)) echo '<h1> please enter location for better result </h1>';
             else if(empty($Job)) echo '<h1> please enter Job for better result </h1>';
	               else if (empty($Name)){
	        //********************************* Empty Name ****************************************
	             if(empty($Name) && !empty($Daira) &&  !empty($Commune))  
			     $sql0="SELECT * FROM users WHERE  Job='$Job' AND Wilaya='$Wilaya' AND Daira='$Daira' AND Commune='$Commune' ";
				 
			          else if(empty($Name) && !empty($Daira) &&  empty($Commune))
				        $sql0="SELECT * FROM users WHERE  Job='$Job' AND Wilaya='$Wilaya' AND Daira='$Daira'  ";
				              else if(empty($Name) && empty($Daira) &&  empty($Commune))
						        $sql0="SELECT * FROM users WHERE  Job='$Job' AND Wilaya='$Wilaya' ";
						 
						 
						 
						               
						 
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
                                      echo'<a href="profile.php?id='.$row0['id'].'" ><img src="imgs/'.$row0['Profile_Pic'].'" alt="" class="resimg" ></a> ';
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row0['id'].'" class="name">  '. $row0['First_Name']." ".$row0['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row0['Phone'] .  '</p> ';
                                      echo' <p class="info">'. $row0['Wilaya'].', '.$row0['Daira'].', '.$row0['Commune'].'</p>  </div> </div>   ';
                                      array_push($arr,$row0['id']);
				                 	  }}
		                                }     
					                 if(mysqli_num_rows($res0)==0){
						             echo '<div class="resultcontainer"> ';
                                      echo ' <p id="noresult">no result found!</p>  </div> ';       
	                                 }     
							        

						 
		   }
						 
			              else if(!empty($Name)){		
					


									 $words=explode(" ",$Name);
									 
                                     foreach ($words as $word ){
										   
									  if(ord($word)==216 || ord($word)==217)
									  $soundex = $obj->soundex($word);
									  else $soundex = soundex($word);
									  
									  $soundex = substr($soundex, 1);
			                         
//*********************** NAME EXIST // name andd daira andd ccommune exissts ************************************
if(!empty($Name) && !empty($Daira) &&  !empty($Commune))
$sql3="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job' AND Wilaya='$Wilaya' AND Daira='$Daira' AND Commune='$Commune' ";
//************************************* Name andd ddaira exxist .... and commune not exxist 
		else if(!empty($Name) && !empty($Daira) &&  empty($Commune))
               $sql3="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job' AND Wilaya='$Wilaya' AND Daira='$Daira' ";	
               //********************************* name exxist .... dadira and commune not exissts 
				else if(!empty($Name) && empty($Daira) &&  empty($Commune))
                        $sql3="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' AND Job='$Job' AND Wilaya='$Wilaya' ";
						        

	                                  $res=mysqli_query($db,$sql3);
                                          
										  
		                            	if(!$res){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res)>0){

			                          while($row2=mysqli_fetch_assoc($res))
				                      	  {
						              
						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row2['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
                                      echo'<a href="profile.php?id='.$row2['id'].'" ><img src="imgs/'.$row2['Profile_Pic'].'" alt="" class="resimg" ></a> ';
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row2['id'].'" class="name">  '. $row2['First_Name']." ".$row2['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row2['Phone'] .  '</p> ';
                                      echo' <p class="info">'. $row2['Wilaya'].', '.$row2['Daira'].', '.$row2['Commune'].'</p>  </div> </div>   ';
                                      array_push($arr,$row2['id']);
				                 	  }}
		                                }     }
										
			  
							        

}
//******************************************* if no results ****************************************************** 
					                 if($count==0&&!empty($Name)){
										 $words=explode(" ",$Name);
									 
                                     foreach ($words as $word ){
										   
									  if(ord($word)==216 || ord($word)==217)
									 { $soundex = $obj->soundex($word);
									  }
									  
									  else $soundex = soundex($word);
									  
									  $soundex = substr($soundex, 1);
			                         
//*********************** NAME EXIST // name andd daira andd ccommune exissts ************************************

                   $sql4="SELECT * FROM users WHERE  indexing LIKE '%$soundex%' ";
//************************************* Name andd ddaira exxist .... and commune not exxist 
		
	                                  $res=mysqli_query($db,$sql4);
                                          
										  
		                            	if(!$res){
	                                  echo "error".mysqli_error($db);
                                       }
		                              if(mysqli_num_rows($res)>0){

			                          while($row2=mysqli_fetch_assoc($res))
				                      	  {
						              
						              $flag=true ;
						              for($j=0;$j<count($arr);$j++)
						              if($arr[$j]==$row2['id']){ $flag=false ; }
						              if($flag){
										  $count++;
	                                  echo'  <div class="resultcontainer">  ';
                                      echo'<a href="profile.php?id='.$row2['id'].'" ><img src="imgs/'.$row2['Profile_Pic'].'" alt="" class="resimg" ></a> ';
                                      echo'<div class="infocontainer"> ';
                                      echo'<a href="profile.php?id='.$row2['id'].'" class="name">  '. $row2['First_Name']." ".$row2['Last_Name'] . ' </a>  ';
                                      echo'<p class="info"> ' .$row2['Phone'] .  '</p> ';
                                      echo' <p class="info">'. $row2['Wilaya'].', '.$row2['Daira'].', '.$row2['Commune'].'</p>  </div> </div>   ';
                                      array_push($arr,$row2['id']);
				                 	  }}
		                                }     }
                                      if($count==0){
									
						             echo '<div class="resultcontainer"> ';
                                      echo ' <p id="noresult">no result found!</p>  </div> ';  }
		                                    
	                                 }   

 }

 /*
$ar_word_1 = $obj->en2ar('omar');
$soundex3 = $obj->soundex($ar_word_1);

$soundex2 = soundex('omar');


$soundex = $obj->soundex('عمر');


echo '<h1>'.$ar_word_1.'</h1>';


echo '<h1>'.$soundex2.'</h1>';

echo '<h1>'.$soundex.'</h1>'; 
*/
/*
  if (isset($_POST['search'])) {

        $query =$_POST['search'];

      



	  $query =$_POST['search'];




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
	  $arr =  array("-1","-2");
	  if(mysqli_num_rows($res)>0){
			  while($row1=mysqli_fetch_array($res))
					  { $flag=true ;
						  for($j=0;$j<count($arr);$j++)
						  if($arr[$j]==$row1['id']){ $flag=false ; }
						  if($flag){
						echo'  <div class="resultcontainer">  ';
      echo'<a href="profile.php?id='.$row1['id'].'" ><img src="imgs/'.$row1['Profile_Pic'].'" alt="" class="resimg" ></a> ';
      echo'<div class="infocontainer"> ';
      echo'<a href="profile.php?id='.$row1['id'].'" class="name">  '. $row1['First_Name']." ".$row1['Last_Name'] . ' </a>  ';
      echo'<p class="info"> ' .$row1['Phone'] .  '</p> ';
      echo"<p class='info'>". $row1['Wilaya'].", ".$row1['Daira'].", ".$row1['Commune'] ."</p>  </div> </div> ";
	       array_push($arr,$row1['id']);

					  }}

                                 }
	     //----------------			from word to metaphone ( *****single**** )and select from table  and write the results  -------------

        if(mysqli_num_rows($res)==0){
              $countt=0;
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
						  $countt++;
						  $flag=true ;
						  for($j=0;$j<count($arr);$j++)
						  if($arr[$j]==$row2['id']){ $flag=false ; }
						  if($flag){
	  echo'  <div class="resultcontainer">  ';
      echo'<a href="profile.php?id='.$row2['id'].'" ><img src="imgs/'.$row2['Profile_Pic'].'" alt="" class="resimg" ></a> ';
      echo'<div class="infocontainer"> ';
      echo'<a href="profile.php?id='.$row2['id'].'" class="name">  '. $row2['First_Name']." ".$row2['Last_Name'] . ' </a>  ';
      echo'<p class="info"> ' .$row2['Phone'] .  '</p> ';
      echo' <p class="info">'. $row2['Wilaya'].', '.$row2['Daira'].', '.$row2['Commune'].'</p>  </div> </div>   ';
      array_push($arr,$row2['id']);
					  }}
		               }     }
					   if($countt==0){
						   echo '<div class="resultcontainer"> ';
                           echo ' <p id="noresult">no result found!</p>  </div> ';  }
		         }
	  }
*/
?>


  </body>
</html>
