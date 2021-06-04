<?php
include('../conn.php');
session_start();


$id=$_GET['id'];
$res=mysqli_query($db,"SELECT * FROM users WHERE id='$id'");
while($row=mysqli_fetch_array($res))
  {
    $First_Name=$row['First_Name'];
    $Last_Name=$row['Last_Name'];
    $Profile_Pic=$row['Profile_Pic'];
    $Appointments_Nbr =$row['Appointments_Nbr'];
    $Eta =$row['Eta'];
    $Last_Ticket_Nbr=$row['Last_Ticket_Nbr'];
}



$user=$_SESSION['Username'];
$res1=mysqli_query($db,"SELECT id FROM users WHERE Username='$user'");
while($row1=mysqli_fetch_array($res1)){
    $Client_id=$row1['id'] ;
    }


    $Appointments=mysqli_query($db,"SELECT * FROM appointments WHERE Worker_id='$id' and Client_id='$Client_id'");


    $ap= mysqli_num_rows($Appointments) ;
    if($ap==1)
    while($r=mysqli_fetch_array($Appointments)){
        $Daate=$r['Daate'] ;
        $Note=$r['Note'] ;
        $Ticket_Nbr=$r['Ticket_Nbr'] ;

        }


if(isset($_POST['confirm'])){


  $date=mysqli_real_escape_string($db,$_POST['date']);
  $note=mysqli_real_escape_string($db,$_POST['note']);
  $TimeIntervale=mysqli_real_escape_string($db,$_POST['TimeIntervale']);

  $Ticket_Nbr= $Last_Ticket_Nbr +1 ;

$Eta=" ";
$query = "INSERT INTO appointments (Worker_id,Client_id,Daate,Note,Ticket_Nbr) VALUES('$id', '$Client_id','$date','$note','$Ticket_Nbr') ";

//update last date and  last ticket

//$Eta=$date+$TimeIntervale ;

$query1 ="UPDATE users set Appointments_Nbr=Appointments_Nbr+1 , Eta='$Eta' ,Last_Ticket_Nbr='$Ticket_Nbr' WHERE  id='$id'";


mysqli_query($db, $query);
mysqli_query($db, $query1);

header("Location:appointment.php?id=".$id);
}

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rondili</title>
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
    <div id="container" >
<div id="square1">

     <?php
  if ($Profile_Pic!="default.png")  echo '<img class="pictures" id="pic" onclick="slide(this.src)" src="imgs/'.$id.'/'.$Profile_Pic .'" alt="" >';
  else  echo '<img id="pic" src="imgs/default.png" class="pictures" onclick="slide(this.src)" alt="" >';



  echo '<strong id="name" >'.$First_Name.' '.$Last_Name.'</strong>';
?>
  <div class="rating" >
<?php
//$c->Show_Rating();
?>

  </div>
<?php  if($ap==0): ?>
<div class="appoinf">
  <p>عدد الحجوزات قبلك </p>
  <?php echo '<p>'.$Appointments_Nbr.'</p>';   ?>
  <p>
 الوقت المتوقع للموعد
  </p>
  <?php echo '<p>'.$Eta.'</p>';  ?>
  <p>تريد تاريخا محددا ؟</p>
  <form action=""  method='post'>
  <input type="date" name="date" value="">
  <input type="text" name="TimeIntervale" value="">
  <input placeholder="ملاحظة" name="note"  class="inputnote">
  <input type="submit" name="confirm" value="تأكيد الحجز" class="btn10">

</form>
</div>
<?php

else:
echo '

  <div class="appoinf">
  <p>تم حجز الموعد</p>
  <p>رقم التذكرة</p>
  <p style="font-size:25px; font-weight:bold;">'.$Ticket_Nbr.'</p>
  <p>
 الوقت المتوقع للموعد
  </p>
  <p>'.$Daate.'</p>

  ملاحظة
  </p>
  <p>'.$Note.'</p>


</div>
';

endif;

 ?>
</div>
</div>
  </body>
  </html>
