<?php 
include('../conn.php') ;

$x='الأغواط';
$sql="SELECT * FROM users WHERE  Wilaya='$x' ";
//$sql="SELECT * FROM users WHERE  First_Name like '%$x%' ";
$res=mysqli_query($db,$sql);

echo mysqli_num_rows($res) ; 

mysqli_close ($db);


















?>