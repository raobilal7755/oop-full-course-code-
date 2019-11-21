<?php 

spl_autoload_register(function($class){
	
	include_once "classes/".$class.".php";
});

$obj_one=new One;
$obj_one->one_method();

$obj_two=new two;
$obj_two->two_method();

$obj_three=new three;
$obj_three->three_method();





 ?>