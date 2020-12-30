<?php
$myfile = fopen("jobs.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$x=1;

while($x<65) {
  $y = fgets($myfile);
//  echo '<options value="'. fgets($myfile) . '">'.fgets($myfile).'</option>';
echo "<link>\n";
echo "<keywords>" .$y. "\n \n \n </keywords>\n";
echo "<value>\n" .$y. "</value>\n";
echo "</link>\n";
  $x++;
}

fclose($myfile);
?>
