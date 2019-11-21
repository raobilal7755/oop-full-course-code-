<?php 

class Student{
	private $name;

	function name($std_name){
		$this->name=$std_name;
	}

	private function get_name(){
		echo "My name is : " . $this->name;
	}

	function get_data(){
		$this->get_name();
	}
}

$obj=new Student;

$obj->name("How to Developer");

$obj->get_data();



 ?>