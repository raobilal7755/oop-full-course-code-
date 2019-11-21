<?php 

class Student{

	public $name='Rao Bilal';
	public static $email='bilal@gmail.com';

	public function name($std_name){
		$this->name=$std_name;
	}

	public function get_name(){
		echo $this->name;
	}


	public static function email($std_email){
		self::$email=$std_email;
	}

	public function get_email(){
		echo self::$email;
	}
}


$obj=new Student;
$obj->name('Ali Bahdur');

$obj->get_name();


echo '<br>';

Student::email('ali@gmail.com');

$obj->get_email();




 ?>