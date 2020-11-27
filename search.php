<?php
session_start();
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
      <select class="dropdown" name="job" >
	  <option value="" disabled selected>ابحث عن</option>

	   <option value="">بناء</option>
	   <option value="">لحام</option>
	   <option value="">ميكانيك السيارات</option>
	   <option value="">دهان</option>
	   <option value="">خياطة</option>
	   <option value="">تصليح الاحدية </option>
	   <option value="">ةنجار</option>
	   <option value="">حلاقة رجال</option>
	   <option value="">كهرباء معماربة  </option>
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
	selectList.appendChild(option);
//Create and append the options



for (i in arr.wilayas) {


   var option = document.createElement("option");
    option.value = i ;
    option.text = arr.wilayas[i].name_ar;
    selectList.appendChild(option);


}
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


		   });   });



		   $(document).ready(function(){


    $("#mySelectcommune").change(function(){
        var communecode = $(this).children("option:selected").val();

		//********* set value of wilaya in input ********

		 document.getElementById("Commune").value= arr.wilayas[wilayacode].dairas[dairacode].communes[communecode].name_ar;


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

// connect to the database
 include('conn.php');



  if (isset($_POST['search'])) {




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

?>


  </body>
</html>
