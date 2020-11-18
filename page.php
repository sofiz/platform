<?php
$data = file_get_contents("php://input");
$random = json_decode($data);

$myfile = fopen("testfile.txt", "a");
$txt = $random[0];
fwrite($myfile, $txt);
fclose($myfile);
?>
