<?php
$data = file_get_contents("php://input");
$random = json_decode($data);



include ('../conn.php');

	$x=count($random);
	for($i=0;$i<=$x;$i++)
		{
    $df=mysqli_query($db,"SELECT Photo_Path,User_id FROM photos WHERE Photo_id='$random[$i]'");
    $row=mysqli_fetch_array($df);




	$dp=mysqli_query($db,"DELETE FROM photos WHERE Photo_id='$random[$i]'");

	unlink('imgs/'.strval($row['User_id']).'/'.$row['Photo_Path']);

		}



?>
