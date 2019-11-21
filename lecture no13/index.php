<?php 

interface Student_A{

	 public function name($std_name);
	
}

interface Student_B extends Student_A{

	 
	 public function email($std_email);

}

class Bilal Implements Student_B{
	public $name;
	public $email;

	public function name($std_name){
		$this->name=$std_name;
	}

	public function email($std_email){
		$this->email=$std_email;
	}

	public function get_result(){
		echo $this->name .'<br>';
		echo $this->email .'<br>';
	}
}

$obj=new Bilal;
$obj->name('Rao Bilal');
$obj->email('bilal@gmail.com');

$obj->get_result();


 ?>