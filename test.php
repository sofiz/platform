<?php 
/*
include('../conn.php') ;

$sql1="SELECT * FROM users WHERE Wilaya='none'";
	                                 
$res1=mysqli_query($db,$sql1);

echo mysqli_num_rows($res1); 

 mysqli_close ($db);


if( strpos ( 'bbxbb' , 'n')!='')
echo 'char exist ';
else echo 'char  not exist ';
*/
$myfile = fopen("py/notaire.txt","r") or die("Unable to open file!");

$des = fgets($myfile); 
$des = fgets($myfile); 
$des=fgets($myfile);

$l=4; 

while(!feof($myfile)) {	
	

$des = fgets($myfile); 
$des = fgets($myfile); 
$des = fgets($myfile);
$des = fgets($myfile); 
$des = fgets($myfile); 
$des = fgets($myfile);

$l=$l+6;

if(strpos($des, '+')== false){	
echo ($l-1)."\n" ;

}



}


 fclose($myfile);
?>