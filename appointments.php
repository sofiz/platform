<?php  include('../conn.php');
$id=$_GET['id'];

$Appointments=mysqli_query($db,"SELECT * FROM appointments WHERE Worker_id='$id'");
$ap= mysqli_num_rows($Appointments) ;



    ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rondili - </title>
    <meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي">
    <meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
    <meta name="author" content="rondili">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="profile.css">
		<link href="//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
		    <script src="index.js"></script>
    <!--    <script data-ad-client="ca-pub-8433558651734014" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
				<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


	<link rel="stylesheet" href="posts.css">



  </head>
	<?php  include('topbar.php');?>
  <body>
<?php

   if($ap==1)
    while($r=mysqli_fetch_array($Appointments)){
        $Daate=$r['Daate'] ;
        $Note=$r['Note'] ;
        $Ticket_Nbr=$r['Ticket_Nbr'] ;
        $Client_id = $r['Client_id'] ;



        $res=mysqli_query($db,"SELECT * FROM users WHERE id='$Client_id'");
        while($row=mysqli_fetch_array($res))
          {
            $First_Name=$row['First_Name'];
            $Last_Name=$row['Last_Name'];
            $Profile_Pic=$row['Profile_Pic'];

        }


  echo '
    <div id="container">
    <div class="square">
      <div class="imgapparent">
';


        if ($Profile_Pic!="default.png")  echo '<img class="imgap" src="imgs/'.$Client_id.'/'.$Profile_Pic .'" alt="" >';
        else  echo '<img id="pic" src="imgs/default.png" class="imgap"  alt="" >';
echo '
      </div>
      <div class="name1">
        <p>'.$First_Name .' '. $Last_Name.'</p>
      </div>
      <div style="text-align:center;">


      <p>رقم التذكرة</p>
      <p style="font-size:25px; font-weight:bold;">'.$Ticket_Nbr.'</p>
      <p>
  الوقت المتوقع : 10-10-2022 10:45
        '.$Daate.'
       </p>
      <p>ملاحظة : '.$Note.'</p>
      <input type="submit" class="btn1" value="إنتهى">
      </div>
    </div>
        </div>
';
      }
else echo 'No Appointments';
      ?>
  </body>


  </html>
