<?php 
class Student{
	private $name ="Rifat";
	private $email ="rifat@gmail.com";
	private $address ="Lahore";


	function insert_data($name,$email,$address){
		$this->name=$name;
		$this->email=$email;
		$this->address=$address;
	}

	function get_this(){
		echo '<pre>';
		print_r($this);
		echo '</pre>';
	}
}

$std=new Student;

$std->insert_data('Rao Bilal','bilal@gmail.com','Lahore');

echo '<pre>';
print_r($std);
echo '</pre>';

$std->get_this();


echo '<br><br> Next object <br><br>';


$std1=new Student;
echo '<pre>';
print_r($std1);
echo '</pre>';

$std1->get_this();




 ?>