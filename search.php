<?php
session_start();

require 'vendor/autoload.php';
error_reporting(E_ERROR);

$errors = array();
$obj = new \ArPHP\I18N\Arabic();

// connect to the database

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
  <link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  	<script src="data.js"></script>
  </head>

  <body>
  <?php include('topbar.php'); ?>
<form action="search.php" method="get">

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




 $(document).ready(function(){


    $("#mySelectwilaya").change(function(){
        wilayacode = $(this).children("option:selected").val();
		//********* set value of wilaya in input ********

		 document.getElementById("Wilaya").value= arr.wilayas[wilayacode].name_ar;
       


		   });   });
	</script>
	<input type="text" name="Wilaya"  value="" class="searchbtn" id="Wilaya" hidden>
    </div>
    <input type="submit" name="recherche"  value= "recherche" class="searchbtn">
				</form>
				
				<?php include('update indexing.php'); ?>


  </body>
</html>
