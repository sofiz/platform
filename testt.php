<?php 

$ar = array ( 
  array("NEWArchitecture","مهندس معماري"),
  array("NEWaudiovisuelles","تقنيات السمعي البصري"),
  array("NEWAvocat","محامي"),
  array("NEWBoucherie","الجزارة و منتجات اللحوم"),     
  array("NEWbuilder","البنــاء"),
  array("NEWCharpenterie","نجارة"),
  array("NEWcoiffeuse","حِلاقة النساء"),
  array("NEWComposition hygienique","التركيب الصحي و الغـاز"),     
  array("NEWcouvertures et meubles","بيع الأغطية و المفروشات"),
  array("NEWHotel","فندق"),
  array("NEWImpression","طباعة"),
  array("NEWlegumes","محل خضروات"),     
  array("NEWlibrarie","مكتبة و أدوات"),
  array("NEWMedecin","طبيب خاص"),
  array("NEWnotaire","موثق"),
  array("NEWnoteur","موثق"),
  array("NEWpeintre","دهان"),
  array("NEWplatre","تجصيص بلاتر"),     
  array("NEWPlomberie","سباكة"),
  array("NEWProduits alimentaires generaux","مواد غذائية عامة"),     
  array("NEWSoudeur","التلحيم"),
  array("NEWsport","رياضة"),  
  array("NEWvetements","محل ألبسة")  

); 

$a = "(France|Paris|Algerie Telecom|Djezzy|Assurance|متحف|Air Algérie|Peugeot|École Supérieure|Institute|Airport|مقر ولاية|Cuisine|Ansej|مديرية|مسح الأراضي|لولاية |مطار|Météo|الوكالة الوطنية لتطوير الإستثمار|Andi|Banque|National Higher School Of Mines And Metallurgy|Résultats De Recherche Coopérative De Céréales & De Légumes Secs|Aéroport|Radio|Direction|Aeroport|Ministère|Centre National|Auberge|الشركة الجزائرية|Saa|Ooredoo|Hyundai|Kia|متوسطة|قاعة متعددة|دار الشباب|شلالات مشتت ماه تيفريت|Algérie Motors|بيجو|Naftal|Ouedkniss|Jumia|Cima Motors|Andi|الديوان الوطني|الشركة الوطنية|Protection Civile|الراطة الولائية الرايضة للصم بشار|سوسيتي جنرال|Condor|إتصالات الجزائر|Lycee|مسجد|Société Générale|Mosque|Bank|Telecomunications|جامعة|قطب|Faculté|Aadl)";


//$x=0;

foreach($ar as $x){ 
$filex =$x[0];
$jobx =$x[1];

$f = fopen("py/1".$filex.".txt","a") ;
$myfile = fopen("py/".$filex.".txt","r");
   //while($x<11) {
   while(!feof($myfile)) {	
	 


  $name =  fgets($myfile);
  
  $phone =  fgets($myfile);
  
  $str=fgets($myfile);
  $words = explode(" ",$str) ;
  $location="";
   
  for($i=1;$i<count($words);$i++){ 
  if($i==1){ 
  $location =$location.$words[$i]; 
  }    
  else{ 
  $location = $location." ".$words[$i]; 
  }   
 }
  $location= rtrim($location); 
  
  if (strpos($location,', Algeria') != false) {
 
     $location =   str_replace(", Algeria","",$location);
	 
}
$location = str_replace(array("é","ê","ë","è"),"e",$location);
$location = str_replace(array("à","á","â","ã","ä","å","æ"),"a",$location);
$location = str_replace(array("ç"),"c",$location);
$location = str_replace(array("ð","ò","ó","ô","õ","ö","ø"),"o",$location);
$location = str_replace(array("ì","í","î","ï"),"i",$location);
$location = str_replace(array("ù","ú","û","ü"),"u",$location);
$location = str_replace(array("ý"),"y",$location);
$location = str_replace(array("ñ"),"n",$location);
$location =   str_replace("-"," ",$location);
$location =   str_replace("'","",$location);



  
  $job = fgets($myfile);
  $job=$jobx; 
  $description =  fgets($myfile) ;
  $description = fgets($myfile)." ".$description;
  
  $name= str_replace(array("\n", "\r"), '', $name);
  $phone= str_replace(array("\n", "\r"), '', $phone);
  $location= str_replace(array("\n", "\r"), '', $location);
  $job= str_replace(array("\n", "\r"), '', $job);
  $description = str_replace(array("\n", "\r"), '', $description);
  
   if($phone == "no"||$phone == "" )
   $phone =  "@";

if( $location != ""  && $name!= "" &&  preg_match($a,$location) != 1 &&  preg_match($a, $name) != 1 &&  preg_match($a, $description) != 1) { 
fwrite($f, $name.PHP_EOL);
fwrite($f, $phone.PHP_EOL);
fwrite($f, $location.PHP_EOL);
fwrite($f, $job.PHP_EOL);
fwrite($f, $description.PHP_EOL);  
}

//$x++; 
}

    fclose($myfile);
	fclose($f);
    
	echo "ALL DONE in <br>".$filex ; 


   }


    exit();
	
	
	
	
	
	/*
	function unichr($u)
{
     return mb_convert_encoding('&#' . intval($u) . ';', 'UTF-8', 'HTML-ENTITIES');
}



  $ligature_map = array(

  unichr(0xFE80) => unichr(0x0621),
  unichr(0xFE81) => unichr(0x0622), unichr(0xFE82) => unichr(0x0622),
  unichr(0xFE83) => unichr(0x0623), unichr(0xFE84) => unichr(0x0623),
  unichr(0xFE85) => unichr(0x0624), unichr(0xFE86) => unichr(0x0624),
  unichr(0xFE87) => unichr(0x0625), unichr(0xFE88) => unichr(0x0625),
  unichr(0xFE89) => unichr(0x0626), unichr(0xFE8B) => unichr(0x0626),
  unichr(0xFE8C) => unichr(0x0626), unichr(0xFE8A) => unichr(0x0626),
  unichr(0xFE8D) => unichr(0x0627), unichr(0xFE8E) => unichr(0x0627),
  unichr(0xFE8F) => unichr(0x0628), unichr(0xFE91) => unichr(0x0628),
  unichr(0xFE92) => unichr(0x0628), unichr(0xFE90) => unichr(0x0628),
  unichr(0xFE93) => unichr(0x0629), unichr(0xFE94) => unichr(0x0629),
  unichr(0xFE95) => unichr(0x062A), unichr(0xFE97) => unichr(0x062A),
  unichr(0xFE98) => unichr(0x062A), unichr(0xFE96) => unichr(0x062A),
  unichr(0xFE99) => unichr(0x062B), unichr(0xFE9B) => unichr(0x062B),
  unichr(0xFE9C) => unichr(0x062B), unichr(0xFE9A) => unichr(0x062B),
  unichr(0xFE9D) => unichr(0x062C), unichr(0xFE9F) => unichr(0x062C),
  unichr(0xFEA0) => unichr(0x062C), unichr(0xFE9E) => unichr(0x062C),
  unichr(0xFEA1) => unichr(0x062D), unichr(0xFEA3) => unichr(0x062D),
  unichr(0xFEA4) => unichr(0x062D), unichr(0xFEA2) => unichr(0x062D),
  unichr(0xFEA5) => unichr(0x062E), unichr(0xFEA7) => unichr(0x062E),
  unichr(0xFEA8) => unichr(0x062E), unichr(0xFEA6) => unichr(0x062E),
  unichr(0xFEA9) => unichr(0x062F), unichr(0xFEAA) => unichr(0x062F),
  unichr(0xFEAB) => unichr(0x0630), unichr(0xFEAC) => unichr(0x0630),
  unichr(0xFEAD) => unichr(0x0631), unichr(0xFEAE) => unichr(0x0631),
  unichr(0xFEAF) => unichr(0x0632), unichr(0xFEB0) => unichr(0x0632),
  unichr(0xFEB1) => unichr(0x0633), unichr(0xFEB3) => unichr(0x0633),
  unichr(0xFEB4) => unichr(0x0633), unichr(0xFEB2) => unichr(0x0633),
  unichr(0xFEB5) => unichr(0x0634), unichr(0xFEB7) => unichr(0x0634),
  unichr(0xFEB8) => unichr(0x0634), unichr(0xFEB6) => unichr(0x0634),
  unichr(0xFEB9) => unichr(0x0635), unichr(0xFEBB) => unichr(0x0635),
  unichr(0xFEBC) => unichr(0x0635), unichr(0xFEBA) => unichr(0x0635),
  unichr(0xFEBD) => unichr(0x0636), unichr(0xFEBF) => unichr(0x0636),
  unichr(0xFEC0) => unichr(0x0636), unichr(0xFEBE) => unichr(0x0636),
  unichr(0xFEC1) => unichr(0x0637), unichr(0xFEC3) => unichr(0x0637),
  unichr(0xFEC4) => unichr(0x0637), unichr(0xFEC2) => unichr(0x0637),
  unichr(0xFEC5) => unichr(0x0638), unichr(0xFEC7) => unichr(0x0638),
  unichr(0xFEC8) => unichr(0x0638), unichr(0xFEC6) => unichr(0x0638),
  unichr(0xFEC9) => unichr(0x0639), unichr(0xFECB) => unichr(0x0639),
  unichr(0xFECC) => unichr(0x0639), unichr(0xFECA) => unichr(0x0639),
  unichr(0xFECD) => unichr(0x063A), unichr(0xFECF) => unichr(0x063A),
  unichr(0xFED0) => unichr(0x063A), unichr(0xFECE) => unichr(0x063A),
  unichr(0x0640) => unichr(0x0640),
  unichr(0xFED1) => unichr(0x0641), unichr(0xFED3) => unichr(0x0641),
  unichr(0xFED4) => unichr(0x0641), unichr(0xFED2) => unichr(0x0641),
  unichr(0xFED5) => unichr(0x0642), unichr(0xFED7) => unichr(0x0642),
  unichr(0xFED8) => unichr(0x0642), unichr(0xFED6) => unichr(0x0642),
  unichr(0xFED9) => unichr(0x0643), unichr(0xFEDB) => unichr(0x0643),
  unichr(0xFEDC) => unichr(0x0643), unichr(0xFEDA) => unichr(0x0643),
  unichr(0xFEDD) => unichr(0x0644), unichr(0xFEDF) => unichr(0x0644),
  unichr(0xFEE0) => unichr(0x0644), unichr(0xFEDE) => unichr(0x0644),
  unichr(0xFEE1) => unichr(0x0645), unichr(0xFEE3) => unichr(0x0645),
  unichr(0xFEE4) => unichr(0x0645), unichr(0xFEE2) => unichr(0x0645),
  unichr(0xFEE5) => unichr(0x0646), unichr(0xFEE7) => unichr(0x0646),
  unichr(0xFEE8) => unichr(0x0646), unichr(0xFEE6) => unichr(0x0646),
  unichr(0xFEE9) => unichr(0x0647), unichr(0xFEEB) => unichr(0x0647),
  unichr(0xFEEC) => unichr(0x0647), unichr(0xFEEA) => unichr(0x0647),
  unichr(0xFEED) => unichr(0x0648), unichr(0xFEEE) => unichr(0x0648),
  unichr(0xFEEF) => unichr(0x0649), unichr(0xFEF0) => unichr(0x0649),
  unichr(0xFEF1) => unichr(0x064A), unichr(0xFEF3) => unichr(0x064A),
  unichr(0xFEF4) => unichr(0x064A), unichr(0xFEF2) => unichr(0x064A)
);

	$firstChar = mb_substr("name", 0, 1, "UTF-8");
	if(!in_array($firstChar, $ligature_map)){
 $Name  =  mb_convert_case(mb_strtolower("name"), MB_CASE_TITLE, "UTF-8");
	//echo $Name ; 
  }
	
  $str="ALGERIE TELECOM RIYADH"; 
  $words = explode(" ",$str) ;
  $location="";
   
  for($i=0;$i<count($words);$i++){ 
  if($i==0){ 
  $location =$location.mb_convert_case(mb_strtolower($words[$i]), MB_CASE_TITLE, "UTF-8"); 
  }    
  else{ 
  $location = $location." ".mb_convert_case(mb_strtolower($words[$i]), MB_CASE_TITLE, "UTF-8"); 
  }   
 }
 
 echo $location ; 
 
 
	$ar = array ( 
  array("Architecture","مهندس معماري"),
  array("audiovisuelles","تقنيات السمعي البصري"),
  array("Avocat","محامي"),
  array("Boucherie","الجزارة و منتجات اللحوم"),     
  array("builder","البنــاء"),
  array("Charpenterie","نجارة"),
  array("coiffeuse","حِلاقة النساء"),
  array("Composition hygienique","التركيب الصحي و الغـاز"),     
  array("couvertures et meubles","بيع الأغطية و المفروشات"),
  array("Hotel","فندق"),
  array("Impression","طباعة"),
  array("legumes","محل خضروات"),     
  array("librarie","مكتبة و أدوات"),
  array("Medecin","طبيب خاص"),
  array("notaire","موثق"),
  array("noteur","موثق"),
  array("peintre","دهان"),
  array("platre","تجصيص بلاتر"),     
  array("Plomberie","سباكة"),
  array("Produits alimentaires generaux","مواد غذائية عامة"),     
  array("Soudeur","التلحيم"),
  array("sport","رياضة"),  
  array("vetements","محل ألبسة")  

); 

//$a = "(France|Paris|france|paris|Algerie Telecom|Djezzy|Assurance|متحف|Air Algérie|Peugeot|École Supérieure|Institute|Airport|مقر ولاية|Cuisine|Ansej|مديرية|مسح الأراضي|لولاية |مطار|Météo|الوكالة الوطنية لتطوير الإستثمار|ANDI|Banque|National Higher School Of Mines And Metallurgy|Résultats De Recherche Coopérative De Céréales & De Légumes Secs|Aéroport|Radio|Direction|Aeroport|Ministère|Centre National|Auberge|الشركة الجزائرية|SAA|Ooredoo|Hyundai|Kia|Stadium|متوسطة|قاعة متعددة|دار الشباب|شلالات مشتت ماه تيفريت|Algérie Motors|بيجو|Naftal|Ouedkniss|Jumia|Cima Motors|ANDI|الديوان الوطني|الشركة الوطنية|Protection Civile|الراطة الولائية الرايضة للصم بشار|سوسيتي جنرال|Condor|إتصالات الجزائر|Lycee|مسجد|Société Générale|Mosque|Bank|Telecomunications|جامعة|قطب|Faculté|Aadl)";


//$x=0;

foreach($ar as $x){ 
$filex =$x[0];
$jobx =$x[1];

$f = fopen("py/NEW".$filex.".txt","a") ;
$myfile = fopen("py/".$filex.".txt","r");
   //while($x<11) {
   while(!feof($myfile)) {	
	 


  $line =  fgets($myfile);
  
  $words = explode(" ",$line);
  $line="";
   
  for($i=0;$i<count($words);$i++){ 
  if($i==0){ 
  $firstChar = mb_substr($words[$i], 0, 1, "UTF-8");
	if(!in_array($firstChar, $ligature_map)){
	 $line=$line.mb_convert_case(mb_strtolower($words[$i]), MB_CASE_TITLE, "UTF-8"); 
      }
  }    
  else{ 
  $firstChar = mb_substr($words[$i], 0, 1, "UTF-8");
	if(!in_array($firstChar, $ligature_map)){
  $line = $line." ".mb_convert_case(mb_strtolower($words[$i]), MB_CASE_TITLE, "UTF-8"); 
    }
  }   
 }
 
  $line= rtrim($line); 
  $line= str_replace(array("\n", "\r"), '', $line);
  fwrite($f, $line.PHP_EOL);


 
}

    fclose($myfile);
	fclose($f);
    
	echo "ALL DONE in <br>".$filex ; 


   }


    exit();
	
	

*/	
	
	
	
	    $wilayascode = array_keys($arr['wilayas']); 
	    foreach($wilayascode as $wilaya) {  
	        $dairascode = array_keys($arr['wilayas'][$wilaya]['dairas']); 
            foreach($dairascode as $daira){
			   if (isset($arr['wilayas'][$wilaya]['dairas'][$daira]['communes'])) {
               $communescode = array_keys($arr['wilayas'][$wilaya]['dairas'][$daira]['communes']);
			   }
	           foreach($communescode as $commune){ 
			   if($location == $arr['wilayas'][$wilaya]['dairas'][$daira]['communes'][$commune]['name_ar']  ){ 
                      $Wilaya = $arr['wilayas'][$wilaya]['name_ar'] ;
			          $Daira = $arr['wilayas'][$wilaya]['dairas'][$daira]['name_ar']; 
					  $Commune = $arr['wilayas'][$wilaya]['dairas'][$daira]['communes'][$commune]['name_ar'];
					               
								   }
								   else 
		}
		}
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	







 
?>