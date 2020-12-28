
<?php
include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>إنشاء حساب</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style_signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="data.js"></script>

<!-- //web font -->
</head>
<body>



	<!-- main -->
	<div class="main-w3layouts wrapper" >

		<div class="main-agileinfo" >

		<?php include('topbar.php'); ?>

			<div class="agileits-top" >
				<form action="signup.php" method="post">
				<?php include('errors.php'); ?>
				<div class="btnscontain">


<button type="button" name="button" class="btns" id="workerbtn" onclick="workerclick()">عامل</button>
<button type="button" name="button" class="btns" id="clientbtn" onclick="clientclick()">زبون</button>
				</div>

				   <input class="text" type="text" name="Username" placeholder="إسم المستخدم" required="">
					 <div class="names">


                    <input class="text" type="text" name="First_Name" placeholder="الإسم " required="" style="width: 46%;
    display: inline-block;
    margin-right: 2%;margin: 0;">
				    <input class="text" type="text" name="Last_Name" placeholder="اللقب" required=""style="    width: 46%;
    margin: 0;
    display: inline-block;
						</div>

					<input class="text email" type="email" name="Email" placeholder="الإيميل" required="">
					<input class="text" type="password" name="Password_1" placeholder="كلمة السر" required="">
					<input class="text w3lpass" type="password" name="Password_2" placeholder="تأكيد كلمة السر" required="">

					<input class="text" type="text" id="phone" name="Phone" placeholder="رقم الهاتف" required>

					<select name="Job" id="jobselect" required>
					<option value="" disabled selected>المهنة</option>
       <option value="بناء">بناء</option>
	   <option value="لحام">لحام</option>
	   <option value="ميكانيك السيارات">ميكانيك السيارات</option>
	   <option value="دهان">دهان</option>
	   <option value="خياطة">خياطة</option>
	   <option value="تصليح الاحدية">تصليح الاحدية </option>
	   <option value="نجارة">نجارة</option>
	   <option value="حلاقة رجال">حلاقة رجال</option>
	   <option value="كهرباء عماربة">كهرباء معماربة  </option>
	   <option value="حدادة">الحدادة</option>
	   <option value="تركيب الصحي والغاز">التركيب الصحي والغاز</option>
	   <option value="التدفئة المركزية">التدفئة المركزية</option>
<option value="المنيوم و المواد البلاستيكية">نجارة الالمنيوم و المواد البلاستيكية </option>
<option value="المطالة هياكل السيارات">المطالة هياكل السيارات</option>
<option value=" التأثيث الداخلي للمركبات">التجهيز و التأثيث الداخلي للمركبات</option>
<option value="كهرباء السيارات">كهرباء السيارات</option>/
<!--		  <option value="">الكهرباء الصناعية</option>
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
						  <option value="">922</option> -->

					</select>
<div id="myDIV" ></div>
					<script>


//************************** for wilaya *******************

var myParent = document.getElementById("myDIV")
//Create and append select list
var selectList = document.createElement("select");
selectList.id = "mySelectwilaya";

myParent.appendChild(selectList);
document.getElementById("mySelectwilaya").classList.add('dropdown');
document.getElementById('mySelectwilaya').required=true;
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



$(document).ready(function(){


    $("#mySelectwilaya").change(function(){
        wilayacode = $(this).children("option:selected").val();
		//********* set value of wilaya in input ********

		 document.getElementById("Wilaya").value= arr.wilayas[wilayacode].name_ar;

		   });   });




	</script>
					<input type="hidden" name ="Wilaya"  id="Wilaya" value=""  >




					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>أوافق على الأحكام والشروط</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="SIGNUP"  value="إنشاء الحساب">
				</form>
				<p> لديك حساب؟ <a href="signin.php"> تسجيل الدخول </a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>  </p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>

<script type="text/javascript">
  workerclick();
	function workerclick(){
		document.getElementById('workerbtn').id='workerbtnselected';
		document.getElementById('clientbtnselected').id='clientbtn';
		document.getElementById('jobselect').style.display='';
		document.getElementById('myDIV').style.display='';
		document.getElementById('phone').style.display='';
		document.getElementById('jobselect').required=true;
		document.getElementById('myDIV').required=true;
		document.getElementById('phone').required=true;
		document.getElementById('mySelectwilaya').required=true;
	}

	function clientclick(){
		document.getElementById('clientbtn').id='clientbtnselected';
		document.getElementById('workerbtnselected').id='workerbtn';
		document.getElementById('jobselect').style.display='none';
		document.getElementById('myDIV').style.display='none';
		document.getElementById('phone').style.display='none';
		document.getElementById('jobselect').required=false;
		document.getElementById('myDIV').required=false;
		document.getElementById('phone').required=false;
		document.getElementById('mySelectwilaya').required=false;
	}

</script>
</html>
