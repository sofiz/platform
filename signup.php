
<?php
session_id("session1");
session_start();
include('server.php') ;
include('topbar.php'); ?>

<html>
<head>
<title>Rondili -  إنشاء حساب</title>
    <meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي, تسجيل">
    <meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
    <meta name="author" content="rondili">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style_signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="data.js"></script>
<script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper" >

		<div class="main-agileinfo" >



			<div class="agileits-top" >
				<form action="signup.php" method="post">
				<?php include('errors.php'); ?>
				<div class="btnscontain">


<button type="button" name="button" class="btns" id="workerbtn" onclick="workerclick()">عامل</button>
<button type="button" name="button" class="btns" id="clientbtn" onclick="clientclick()">زبون</button>
<button type="button" name="button" class="btns" id="clientbtn" onclick="Addclick()" style="margin-left:46px">اضف عامل</button>
<input type="hidden" name="typeinp" value="worker" id="typeinp">
				</div>



				   <input class="text" type="text" name="Username" placeholder="إسم المستخدم" required="">
					 <div class="names">


                    <input class="text" type="text" name="First_Name" placeholder="الإسم " required="" style="width: 46%;
    display: inline-block;
    margin-right: 2%;margin: 0;">
				    <input class="text" type="text" name="Last_Name" placeholder="اللقب" required=""style="    width: 46%;
    margin: 0;
    display: inline-block; "
						</div>

					<input class="text" type="email" name="Email" placeholder="الإيميل" required="">
					<input class="text" type="password" name="Password_1" placeholder="كلمة السر" required="">
					<input class="text w3lpass" type="password" name="Password_2" placeholder="تأكيد كلمة السر" required="">

					<input class="text" type="text" id="phone" name="Phone" placeholder="رقم الهاتف" required>

					<select name="Job" id="jobselect" required>
					<?php include 'jobsdata.html'; ?>

					</select>
<div id="myDIV" ></div>



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
		document.getElementById('typeinp').value="worker";
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
		document.getElementById('typeinp').value="client";
	}

</script>
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

</html>
<html>
