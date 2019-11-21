<?php 

abstract class Student{

	protected $name;
	protected $email;

	abstract public function name($std_name);
	abstract public function email($std_name);

	public function get_result(){
		echo $this->name .'<br>';
		echo $this->email .'<br>';
	}


}

class Bilal extends Student{

	public function name($std_name){
		$this->name=$std_name;
	}
	public function email($std_email){
		$this->email=$std_email;
	}
}

$obj=new Bilal;
$obj->name('Rifat Firdos');
$obj->email('Rifat@gmail.com');

$obj->get_result();






 ?>