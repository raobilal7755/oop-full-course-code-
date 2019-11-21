<?php 

/*__FILE__
__DIR__
__METHOD__
__CLASS__
__FUNCTION__*/

echo __FILE__.'<br>';
echo __DIR__.'<br>';

class Student{


	public function name(){
		echo __METHOD__.'<br>';
		echo __CLASS__.'<br>';
	}
}

$obj=new Student;
$obj->name();


function my_name(){
	echo __FUNCTION__.'<br>';
}

my_name();


 ?>