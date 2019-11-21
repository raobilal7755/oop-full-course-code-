<?php 

class Student{

	private $name;
	private $email;
	private $address;

	public function __construct($name,$email,$address){
		$this->name=$name;
		$this->email=$email;
		$this->address=$address;
	}

	public function name($std_name){
		$this->name=$std_name;
	}

	function get_data(){
		echo 'My name is : ' . $this->name .'<br>';
		echo 'My email is : ' . $this->email .'<br>';
		echo 'My address is : ' . $this->address .'<br>';
	}


	public function __destruct(){
		echo 'sir i am destructor <br>';
	}


}

$obj=new Student('Rao Bilal','bilal@gmail.com','Lahore');
$obj->name('Rao Bilal');
$obj->get_data();







 ?>