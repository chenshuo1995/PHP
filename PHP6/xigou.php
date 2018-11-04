<?php 
	class Person{
		public $num = 0;
		function __construct(){
			$this->num++;
			echo $this->num.'<hr>';
		}
		function __destruct(){
			$this->num--;
			echo $this->num;
		}
	}
	$person1 = new Person();
 ?>