<?php 

class Father{
	public function creative_thinking(){
		echo 'creative_thinking';
	}

	public function Confidence(){
		echo 'high confidence';
	}

	public function character(){
		echo 'best character';
	}

	public function daily_learn(){
		echo 'Learn daily';
	}

}


class Child extends Father{

	public function smart_work(){
		echo 'smart work';
	}

}

class Child1 extends Father{

	public function self_management(){
		echo 'self_management';
	}

}

class Child2 extends Father{

	public function communcation_skill(){
		echo 'communcation_skill';
	}

}


$obj=new Child2;

$obj->daily_learn();




 ?>