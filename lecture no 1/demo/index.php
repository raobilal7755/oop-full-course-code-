<?php 

class Student{
 // property , variable , field, 
	private $name="Bilal";
	private $addres="Bahawalpur";
	private $email="Bilal@gmail.com";

// method
	function name($std_name){
		$this->name=$std_name;
	}
	function my_this(){
		echo '<pre>';
		print_r($this);
		echo '</pre>';
	}
	function address($std_address){
		$this->address=$std_address;
	}

	function email($std_email){
		$this->email=$std_email;
	}

	function get_std_info(){
		echo "Student Name is : " . $this->name .'<br>';
		echo "Student Email is : " . $this->email .'<br>';
		echo "Student Address is : " . $this->address .'<br>';
	}

}

$std=new Student;

$std->name("sonia");
$std->email("sonia@gmail.com");

echo '<pre>';
print_r($std);
echo '</pre>';


$std->my_this();


// new obj
$std1=new Student;
echo '<pre>';
print_r($std1);
echo '</pre>';
$std1->my_this();






 ?>