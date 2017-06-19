<?php
/**
 * To get all the language file string
 * @author  Dilshad.Khan <dilshad.khan.in@gmail.com>
**/
$language = (isset($_GET['lang']) && !empty($_GET['lang'])) ? $_GET['lang'] : 'en';
$langfile = ROOT_PATH.DIRECTORY_SEPARATOR.'lang'.DIRECTORY_SEPARATOR.$language.'.php';
function t($string){
	global $langfile;	
	if(file_exists($langfile)) {
		include($langfile);	
		if(isset($lang[$string]) && !empty($lang[$string]))
			return $lang[$string];
		else 
			return 'Language key is missing!';	
	}
	else {
		ob_clean();
		echo 'Please include '.$language.'.php file';
		exit;
	}
}