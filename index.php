<?php
include('../conn.php');

ini_set('session.gc_maxlifetime', 1866240000);
// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(1866240000);
session_id("session2");
session_start();
if (!isset($_SESSION['page_visited_already'])){
$rest=mysqli_query($db,"SELECT Allvisitors,Users,Unkown FROM visitors WHERE id='1' ");
while($row=mysqli_fetch_array($rest)){
$AllVisitors=$row['Allvisitors'] ;
$Users=$row['Users'] ;
$Unkown=$row['Unkown'] ;
}

$AllVisitors++;
$Unkown=$AllVisitors-$Users;

$sql0="UPDATE visitors SET Users='$Users',Allvisitors='$AllVisitors',Unkown='$Unkown',Indexvisit=Indexvisit+1 where id='1'";
$res0=mysqli_query($db,$sql0);
if(!$res0){
echo "error".mysqli_error($db);
               }
	   

		$_SESSION['page_visited_already'] = 1;

}
session_write_close();

mysqli_close ($db);


 ?>

<!DOCTYPE html>
<html lang="ar" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rondili - رونديلي </title>
    <meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي">
    <meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
<link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="data.js">
<script src="data.js"></script>
<link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
<script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta name="author" content="rondili">

    <script>


function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.display="none";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      document.getElementById("livesearch").style.display="inline";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}

function sugtoinput(x) {
  document.getElementById('searchinput').value=x;
}
</script>

  </head>
  <body>
<div class="topbar">
  <img  src="logo_white_transp.png" class="logo">
</img>
  <div class="tiles">


  <div class="search tile">
    <a class="subtile" href="search.php">بحث</a>
  </div>
  <div class="about tile">
    <a class="subtile" href="#">مساعدة</a>
  </div>

  <div class="login tile">
    <a class="subtile" href="signin.php">تسجيل</a>
  </div>
  </div>
</div>
<img class="backimg" src="workers_background.png" alt="">

<div class="strongtext">
  <p class="line1">تبحث عن عامل ؟</p>
  <p class="line2">في منطقتك؟</p>
  <p class="line3">أنت في المكان الصحيح .رونديلي أفضل وسيلة تواصل بين الزبائن و العمال</p>
</div>

<form action="search.php" method="get">

    <div class="searchbar">
    <input type="text" id="searchinput" name="search" autocomplete="off" placeholder=" ابحث عن" class="searchinput" onkeyup="showResult(this.value)">
    <div id="livesearch"></div>
    <div id="myDIV">
      <select class="dropdown" name="Job" >


	   <option value="" id="option1" selected>ابحث عن</option>
<?php include 'jobsdata.html';
?>
     </select>

    </div>

    <?php include 'wilayascript.html'; ?>
<script>
       document.getElementById('mihna').remove();

	</script>
	<input type="text" name="Wilaya"  value=""  id="Wilaya" hidden>
    </div>
    <input type="submit" name="recherche"  value= "بحث" class="searchbtn">


				</form>


<div class="description">
  <p class="descriptiontxt">
    نرحب بكم فى موقع رونديلي دوت كوم ,
    <br>
الوسيط الدي يربط بين الزبون و العامل لتقريب المسافة و ربح الوقت و ضمان احسن الخدمات و تشغيل العمال ,
<br>
موقعنا مجاني تماما , يمكنك كزبون البحث عن اي خدمة تحتاج و دالك عن طريق ادخل اسم الخدمة و الولاية التى تسكن , اما ادا كنت تبحث عن محل فيمكنك ادخال اسمه و ستجد جميع التفاصيل في وصف الحساب , ايام العمل ,الاسعار, الموقع, صور و بعض التعليقات و تقييمات لصاحب الحساب ... الخ .ودالك مباشره من خانة البحث او بتسجيل كزبون ادا اردت اضافة تعليقات و الاراء , تقييمات للعمال لتحديد جودة الخدمات عنده
<br>
يكمنك تحويل حسابك الى حساب عامل باضافة المعلومات اللازمة .
<br>
 وفي حالة كنت عامل صاحب مهنة او اي خدمة قانونية يمكنك تسجيل و ملئ جميع المعلومات كالخدمة و رقم الهاتف و اضافة صور لمحلك او الخدمات المقدمة (اد لم تجد الخدمة التي تقدمها في خانة الخدمات فعليلك بتواصل معنا لاضافة خدمتك في الموقع, عبر زر تواصل و ابلاغ)
<br>
  بامكان اي شخص اضافة عمال في صفحة التسجيل بضغط على الزر اضف عامل هدا الحساب ليس شخصي يمكن لاي شخص اضافة معلومات جديدة او تحديثات , اما ادا وجدت نفسك مسجلا واردت حساب شخصي فعليك بالابلاغ عن الحسااب و اعادة التسجيل
<br>
 حدف الحساب نهائيا يكون من اعدادات الحساب
<br>
نلعمكم ان الموقع ليس مسؤول عن المعلومات و الحسابات المسجلة او اي استخدام غير قانوني (يمكنك مراجعة سياسة الخصوصية ) و نرجوا منكم ابلاغنا باي خلل في الموقع , او تقديم نصائح لاضافة خصائص للموقع تخدم الزبائن و العمال
</p>
</div>

<div class="footer">

  <div class="tilesf">

  <div class="search tile">
    <a class="subtile" href="search.php">بحث</a>
  </div>


  <div class="login tile">
    <a class="subtile" href="signin.php"> تسجيل الدخول</a>
  </div>

  <div class="signup tile">
    <a class="subtile" href="signup.php">تسجيل</a>
  </div>

  <div class="policy tile">
    <a class="subtile" href="policy.php">سياسة الخصوصية</a>
  </div>



  <div class="contact tile">
    <a class="subtile" href="report.php">تواصل و إبلاغ</a>
  </div>

  <div class="facebook tile">
    <a class="subtile" href="www.facebook.com"><i class="fa fa-facebook"></i></a>
  </div>


  <div class="insta tile">
    <a class="subtile" href="www.instagram.com"><i class="fa fa-instagram"></i></a>
  </div>

  </div>


</div>
  </body>
</html>
