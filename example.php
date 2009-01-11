<?php
require("GTranslate.php");

 try{
       $gt = new Gtranslate;
       echo "Translating [Hello World] from English to German => ".$gt->english_to_german("hello world")."<br/>";
	echo "Translating [Ciao mondo] Italian to English => ".$gt->it_to_en("Ciao mondo")."<br/>";
 } catch (GTranslateException $ge)
 {
       echo $ge->getMessage();
 }

?>
