<?php 

class Student{
	private $name;
	private $email;
	private $address;

	public function name($std_name){
		$this->name=$std_name;
		return $this;
	}

	public function email($std_email){
		$this->email=$std_email;
		return $this;
	}

	public function address($std_address){
		$this->address=$std_address;
		return $this;
	}

	public function get_result(){
		echo $this->name .'<br>';
		echo $this->email .'<br>';
		echo $this->address .'<br>';
	}


}


$obj=new Student;

$obj->name('Rao Imran')
	->email('imran@gmail.com')
	->address('Lahore');

$obj->get_result();


 ?>