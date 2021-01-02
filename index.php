
<!DOCTYPE html>
<html lang="ar" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rondili - رونديلي </title>
    <meta name="keywords" content="rondili, service, job, خدمة ,الجزائر ,عامل , رونديلي">
    <meta name="description" content="
تبحث عن خدمة أو عامل في منطقتك ؟
لديك عمل أو خدمة و تبحث عن الزبائن؟
رونديلي هي الحل، منصة تجمع بين الزبون و أصحاب الأعمال rondili ">
    <meta name="author" content="rondili">
  </head>
  <body>

  </body>
</html>
<?php

//ss

        include 'visitors.php'; 

		$indexvisit++ ;
        $var_str1 = var_export($AllVisitors, true);
		$var_str2 = var_export($indexvisit, true);
		
        $var ="<?php\n\n\$AllVisitors=$var_str1;\n\n\n\$indexvisit=$var_str2;\n\n?>";
        file_put_contents('visitors.php', $var);
		
		
		
		
		

header('Location: search.php');



 ?>
