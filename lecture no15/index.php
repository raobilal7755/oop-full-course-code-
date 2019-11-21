<?php 

class Student{
	public function name(){
		echo 'sir i am name <br>';
	}

	public function email(){
		echo 'sir i am email <br>';
	}

	public function address(){
		echo 'sir i am address form parent <br>';
	}

	
}


trait Address{
	public function address(){
		echo 'sir i am address <br>';
	}

}

trait Phone{

	public function phone_no(){
		echo 'sir i am phone_no <br>';
	}
}


class A extends Student{

}

class B extends Student{

}

class C extends Student{

}

class D extends Student{
	use Address;
	public function address(){
		echo 'sir i am address form child <br>';
	}

}

$obj=new D;
$obj->address()




 ?>