<?php 
	class Person{
		public $name = '新秋';
		private $age = 20;
		protected $weight = '45';
		function showName(){
			echo $this->name;
		}
		function showAge(){
			echo $this->age;
		}
		function showWeight(){
			echo $this->weight;
		}
	}
	class Student extends Person{
		public $job = 'stu';
		function getWeight(){
			echo $this->weight;
		}
	}
	$p1 = new Person;
	$s1 = new Student;

	//验证public
	echo $p1->name;//新秋
	$p1->showName();
	echo $s1->name;
	//以上操作证明 使用public修饰的属性或方法在本类内部 本类外部以及子类中都能访问 并且会被子类继承

	//验证private
	//echo $p1->age;//私有属性在本类外部不能访问
	$p1->showAge();
	//echo $s1->age;//私有属性无法被子类访问
	//使用private修饰的属性和方法只能在本类内部访问，并且不会被子类继承

	//验证protected
	//echo $p1->weight;//受保护的属性 在本类外部无法访问
	$p1->showWeight();//45
	//echo $s1->weight;//受保护 无法访问
	$s1->getWeight();//在子类内部可以访问
	//被protected修饰的属性 在本类内部可以访问 子类可以访问
 ?>