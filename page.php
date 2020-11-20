<?php
$data = file_get_contents("php://input");
$random = json_decode($data);




$db = mysqli_connect('localhost', 'root', '', 'platform');
if(mysqli_connect_errno())
		echo"failed to connect ". mysqli_connect_error() ;
	
	
	$x=count($random);
	for($i=0;$i<=$x;$i++)
		{
    $df=mysqli_query($db,"SELECT Photo_Path FROM photos WHERE Photo_id='$random[$i]'");
    $row=mysqli_fetch_array($df);
	
	
	$dp=mysqli_query($db,"DELETE FROM photos WHERE Photo_id='$random[$i]'");
	
	unlink('imgs/'.$row['Photo_Path']);
	
		}



?>
