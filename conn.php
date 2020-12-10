<?php
//$db = mysqli_connect('127.0.0.1', 'azure', '6#vWHD_$', 'platform',51451);
$db = mysqli_connect('localhost', 'root', '', 'platform');
if(mysqli_connect_errno())
		//echo"failed to connect ". mysqli_connect_error() ;
        $db = mysqli_connect('127.0.0.1', 'azure', '6#vWHD_$', 'platform',51451);

 ?>
