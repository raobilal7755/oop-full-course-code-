<?php 
spl_autoload_register(function($myclass){
	$file_name='files/'.$myclass.'.php';
	if (!file_exists($file_name)) {
		return false;
	} else {
		include 'files/'.$myclass.'.php';
	}
});





 ?>