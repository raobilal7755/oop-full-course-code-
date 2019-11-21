<?php 

namespace One{

	class Student{

		public function name(){
			echo 'sir i am name <br>';
		}

		public function email(){
			echo 'sir i am email. <br>';
		}
	}


}


namespace{

	use One\Student as st;

	$obj=new st;
	$obj->name();
	$obj->email();


}



 ?>