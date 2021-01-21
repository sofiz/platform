<?php 
include('../conn.php') ;

$sSQL= 'SET CHARACTER SET utf8';
mysqli_query($db,$sSQL)
or die ('can\'t charset in DataBase');

$x='الأغواط';
$sql="SELECT * FROM users WHERE  Wilaya='$x' ";
//$sql="SELECT * FROM users WHERE  First_Name like '%$x%' ";
$res=mysqli_query($db,$sql);

echo mysqli_num_rows($res) ; 

mysqli_close ($db);


















?>