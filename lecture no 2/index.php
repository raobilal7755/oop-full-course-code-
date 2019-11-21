<?php 


class Student{
	// properties  fields variables
	private $name;
	private $email;
	private $address;

// methods
// 					ali
	function name($std_name){
		$this->name=$std_name;
	}

	function email($std_mail){
		$this->email=$std_mail;
	}

	function address($std_address){
		$this->address=$std_address;
	}

	function get_all_data(){
		echo 'My name is : ' .$this->name .'<br>';
		echo 'My email is : ' .$this->email .'<br>';
		echo 'My address is : ' .$this->address .'<br>';
	}

	
	
}

$std=new Student;

$std->name('Bilal');
$std->email('Bilal@gmail.com');
$std->address('Lahore');

$std->get_all_data();


echo '<br>Next object <br><br>';


$std1=new Student;

$std1->name('sana');
$std1->email('sana@gmail.com');
$std1->address('Lahore');

$std1->get_all_data();







 ?>